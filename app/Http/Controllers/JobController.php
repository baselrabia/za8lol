<?php

namespace App\Http\Controllers;

use Auth;
use App\Job;
use App\JobSkill;
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
			'company_brief' => 'required|string|min:3|max:2000',
			'requirements' => 'required|string|min:3|max:2000',
			'skills' => 'required|array|min:1|max:50',
			'logo' => 'required|file|image',
			'salary' => 'required',
		]);

		if ($v->fails()) {
			session()->flash('errors', $v->errors()->toArray());
			return back();
		}else{

	    	$path = request()->logo->store('public/images');

			$a = new Job;
			$a->logo = str_replace('public', 'storage', $path);
			$a->name = request()->name;
			$a->title = request()->title;
			$a->description = request()->description;
			$a->requirements = request()->requirements;
			$a->company_brief = request()->company_brief;
			$a->location = request()->location;
			$a->company_name = request()->company_name;
			$a->salary = request()->salary;
			$a->user_id = Auth::id();
			$a->save();


			foreach (request()->skills as $key => $value) {
				$b = new JobSkill;
				$b->name = $value;
				$b->job_id = $a->id;
				$b->save();
			}

			session()->flash('success', 'job created successfully!');
			return back();
		}
    }
}
