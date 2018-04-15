<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
		$page   = request()->get('page', 1);
		$amount = request()->get('amount', 10);
		$q      = request()->q;

		$offset = ($page - 1) * $amount;

		$x = Job::where('name', 'like', "%{$q}%");
		$total = $x->count();
		$data  = $x->limit($amount)->offset($offset)->get();

		return view('user.search', [
			'jobs'   => $data,
			'pages'  => ceil($total / $amount),
			'page'   => $page,
			'amount' => $amount,
			'q' => $q,
		]);
    }
}
