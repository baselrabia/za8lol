<?php

namespace App\Http\Controllers;

use Auth;
use App\Job;
use Validator;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
		$id = request()->job_id;
		$a  = Job::find($id);

		if ($a) {
			return view('user.job', ['job' => $a]);
		}else{
			return redirect('/search');
		}
    }

    public function process(){

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
			$a = new Job;
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
    }
}
