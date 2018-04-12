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

Route::get('/login', function(){
	return view('user.login');
});

Route::post('/login_process', function(){

	$v = Validator::make(request()->all(), [
		'email' => 'required|string|email|min:10|max:100|exists:users,email',
		'password' => 'required|string|min:4|max:50',
	]);

	if ($v->fails()) {
		session()->flash('errors', $v->messages()->toArray());
		return redirect('/login');
	}else{
		$a = App\User::where('email', request()->email)->first();
		if ($a->password == request()->password) {
			Auth::login($a);
			return redirect('/home');
		}
		session()->flash('error', 'your password is wrong!');
		return back();
	}

});


Route::get('/register', function(){
	return view('user.register');
});

Route::post('/register_process', function(){
	$v = Validator::make(request()->all(), [
	'first_name' => 'required|string|min:3|max:50',
	'last_name'  => 'required|string|min:3|max:50',
	'email'      => 'required|string|min:10|max:100|email|unique:users,email',
	'password'  => 'required|string|min:3|max:50',
	'phone'     => 'required|string|min:10|max:30',
	'location'  => 'required|string|min:2|max:30',
	'gender'    => 'required|string|in:male,female',
	]);

	if ($v->fails()) {
		session()->flash('errors', $v->errors()->toArray());
		return back();
		// return redirect('/register');
	}
	
	$a = new App\User;
	$a->first_name = request()->first_name;
	$a->last_name  = request()->last_name;
	$a->email      = request()->email;
	$a->password   = request()->password;
	$a->gender     = request()->gender;
	$a->location   = request()->location;
	$a->phone      = request()->phone;
	$a->save();

	Auth::login($a);

	return redirect('/home');
});

Route::get('/logout', function(){
	Auth::logout();
	return redirect('/home');
});

Route::get('/search', function(){
	$page   = request()->get('page', 1);
	$amount = request()->get('amount', 10);

	$offset = ($page - 1) * $amount;

	return view('user.search', [
		'jobs' => App\Job::limit($amount)->offset($offset)->get()
	]);
});

Route::get('/job', function(){
	return view('user.job');
});
Route::get('/create_job', function(){
	return view('user.create_job');
});


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