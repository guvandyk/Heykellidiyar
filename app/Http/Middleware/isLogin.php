<?php

namespace App\Http\Middleware;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;

class isLogin
{
   
   
    public function handle(Request $request, Closure $next)
    {
         if(Auth::check()){
            
        return redirect()->route('admin.dashboard');
             }
        return $next($request);

   }
}
