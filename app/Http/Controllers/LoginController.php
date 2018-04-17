<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Validator;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
    	return view('user.login');
    }

    public function process(){
		$v = Validator::make(request()->all(), [
			'email' => 'required|string|email|min:10|max:100|exists:users,email',
			'password' => 'required|string|min:4|max:50',
		]);

		if ($v->fails()) {
			session()->flash('errors', $v->messages()->toArray());
			return redirect('/login');
		}else{
			$a = User::where('email', request()->email)->first();
			if ($a->password == request()->password) {
				if ($a->verified) {
					Auth::login($a);
					return redirect('/home');
				}else{
					session()->flash('error', 'your email is not verified!');
					return back();
				}
			}
			session()->flash('error', 'your password is wrong!');
			return back();
		}
    }
}
