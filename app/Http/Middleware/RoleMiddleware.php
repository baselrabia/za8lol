<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $x)
    {
        if (Auth::user()->role == $x) {
            return $next($request);
        }else{
            return redirect('/home');
        }
    }
}
