<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
    	return view('user.register');
    }

    public function process(){
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
		
		$a = new User;
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
    }
}
