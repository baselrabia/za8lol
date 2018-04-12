<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.welcome');
});

Route::get('/home', function () {
    return view('user.welcome');
});

Route::get('/login', 'LoginController@index')->middleware('guest');

Route::post('/login_process', 'LoginController@process')->middleware('guest');


Route::get('/register', 'RegisterController@index')->middleware('guest');

Route::post('/register_process','RegisterController@process')->middleware('guest');

Route::get('/logout', function(){
	Auth::logout();
	return redirect('/home');
})->middleware('auth');

Route::get('/search', function(){
	$page   = request()->get('page', 1);
	$amount = request()->get('amount', 10);
	$q      = request()->q;

	$offset = ($page - 1) * $amount;

	$x = App\Job::where('name', 'like', "%{$q}%");
	$total = $x->count();
	$data  = $x->limit($amount)->offset($offset)->get();

	return view('user.search', [
		'jobs'   => $data,
		'pages'  => ceil($total / $amount),
		'page'   => $page,
		'amount' => $amount,
		'q' => $q,
	]);
});

Route::get('/job', function(){
	$id = request()->job_id;
	$a  = App\Job::find($id);

	if ($a) {
		return view('user.job', ['job' => $a]);
	}else{
		return redirect('/search');
	}
});
Route::get('/create_job', function(){
	return view('user.create_job');
})->middleware('auth');


Route::post('/create_job_process', function(){

	$v = Validator::make(request()->all(), [
		'name'  => 'required|string|min:3|max:200',
		'title' => 'required|string|min:3|max:200',
		'description' => 'required|string|min:3|max:2000',
		'location' => 'required|string|min:3|max:50',
		'company_name' => 'required|string|min:3|max:50',
		'salary' => 'required',
	]);

	if ($v->fails()) {
		session()->flash('errors', $v->errors()->toArray());
		return back();
	}else{
		$a = new App\Job;
		$a->name = request()->name;
		$a->title = request()->title;
		$a->description = request()->description;
		$a->location = request()->location;
		$a->company_name = request()->company_name;
		$a->salary = request()->salary;
		$a->user_id = Auth::id();
		$a->save();

		session()->flash('success', 'job created successfully!');
		return back();
	}
})->middleware('auth');

Route::get('/test', function(){

	return session()->all();

	$a = App\User::where('first_name','farha')->limit(10)->offset(39)->get();

	// $a = App\User::offset(39)->limit(10)->where('first_name','farha')->get();
	return $a;
});

//find(1)
//find([1,2,3])
//where()
//orWhere()
//get()
//first()
//limit()  take()
//offset() skip()
//all()
//select('first_name','last_name')
//update()
//create()

//App\User::create($_POST);

/*
$a = new App\User;
$a->first_name = $_POST['first_name'];
$a->last_name  = $_POST['last_name'];

$a->save();
*/

// Auth::check()
// Auth::guest()
// Auth::user()
// Auth::id()
// Auth::login($user)
// Auth::logout()

// session()->all()
// session()->put('key', 'value')
// session()->get('key', [])
// session()->flash('key', 'value')
// session()->exists('key')