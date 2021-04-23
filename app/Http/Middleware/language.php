<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class language
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
         if (session()->has('locale') AND in_array(session('locale'), ['tm', 'ru','en']))
            app()->setLocale(session('locale'));
        else
            app()->setLocale(config('app.fallback_locale'));
        return $next($request);
    }
}
