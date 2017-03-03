<?php

namespace App\Http\Middleware;

use Closure;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (\Cookie::has('locale')) 
        {
            app()->setLocale(\Cookie::get('locale'));
        }else
        {
            $default_locale = \App\Lang::where('default',1);
            if ($default_locale->exists()) 
            {
                app()->setLocale($default_locale->first()->code);
            }
        }

        return $next($request);
    }
}
