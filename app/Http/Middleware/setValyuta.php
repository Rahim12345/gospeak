<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class setValyuta
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
        if (!session()->has('valyuta'))
        {
            session()->put('valyuta','AZN');
        }
        return $next($request);
    }
}
