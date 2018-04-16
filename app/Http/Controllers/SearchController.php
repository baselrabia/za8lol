<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
		return view('user.search');
    }
    public function data(){
		$page   = request()->get('page', 1);
		$amount = request()->get('amount', 10);
		$q      = request()->q;

		$offset = ($page - 1) * $amount;

		$x = Job::where('name', 'like', "%{$q}%")
		->orWhere('title', 'like', "%{$q}%")
		->orWhere('description', 'like', "%{$q}%")
		->orWhere('requirements', 'like', "%{$q}%");

		$total = $x->count();
		$data  = $x->with('skills')->limit($amount)->offset($offset)->get();

		return [
			'jobs'   => $data,
			'pag' => [
				'page'   => $page,
				'total'  => $total,
				'amount' => $amount,
				'q' => $q,
			]
		];
    }


    public function indexPhp(){
		$page   = request()->get('page', 1);
		$amount = request()->get('amount', 10);
		$q      = request()->q;

		$offset = ($page - 1) * $amount;

		$x = Job::where('name', 'like', "%{$q}%");
		$total = $x->count();
		$data  = $x->limit($amount)->offset($offset)->get();

		return view('user.search-php', [
			'jobs'   => $data,
			'pages'  => ceil($total / $amount),
			'page'   => $page,
			'total'  => $total,
			'amount' => $amount,
			'q' => $q,
		]);
    }
}
