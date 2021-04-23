<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class search
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(\Illuminate\Http\Request::segment(1)=='search'){
            return redirect()->route('home');
        }

        return $next($request);
    }
}
