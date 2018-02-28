<?php

namespace App\Http\Middleware;

use Closure;

class RestrictedArea
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
				//if not administrator/admin, redirect
				//else continue
        return $next($request);
    }
}
