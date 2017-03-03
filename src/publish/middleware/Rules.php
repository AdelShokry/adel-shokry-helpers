<?php

namespace App\Http\Middleware;

use Closure;

class Rules
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$rule)
    {
        if (auth()->user()) 
        {
            if ($rule == 'admin') 
            {
                if (auth()->user()->rule == 'admin') 
                {
                    return $next($request);
                }else
                {
                    return view('Helper::unauthorized');
                }
            }else
            {
                if (auth()->user()->rule == $rule || auth()->user()->rule == 'admin') 
                {
                    return $next($request);
                }else
                {
                    return view('Helper::unauthorized');
                }

            }
            
        }
    }
}
