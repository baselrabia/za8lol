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



Route::get('/checkadmin', function () {
    return 'hello admin!';
})->middleware('role:accoutant','auth');

Route::get('/mail', function () {
	$user = 'amitzarboxa@gmail.com';
    Mail::send('verify', [], function($mail) use($user){
    	$mail->to($user);
    	$mail->subject('Za8lol verify email');
    });
});

Route::get('/verify', function () {
    $link = request()->link;

    $user = App\User::where('verify_link', $link)->first();

    if ($user) {
    	$user->verify_link = null;
    	$user->verified = true;
    	$user->save();

    	Auth::login($user);
    }

    return redirect('/home');

});

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

Route::get('/search', 'SearchController@index');
Route::get('/search-data', 'SearchController@data');
 	
Route::get('/search-php', 'SearchController@indexPhp');

Route::get('/job', 'JobController@index');

Route::get('/create_job', function(){
	return view('user.create_job', [
		'skills' => App\Skill::all()
	]);
})->middleware('auth');


Route::post('/create_job_process','JobController@process')->middleware('auth');

Route::get('/test', function(){

	$a = App\Job::with('bookmarks','user','skills')->find(1);
	$b = App\User::with('jobs','bookmarks')->find(1);
	$c = App\Boomkmark::with('job','user')->find(1);

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

//php artisan make:model Job
//model class in app folder

//php artisan make:controller JobController
//controller class in app/Http/Controllers folder

//php artisan make:middleware admin
//controller class in app/Http/Middlewares folder

//php artisan make:migration users
//controller class in database/migrations folder