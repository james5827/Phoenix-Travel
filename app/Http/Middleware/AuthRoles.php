<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthRoles
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
        if(Auth::user()->authorisation_level === "Staff")
            return redirect('/home');
        if(Auth::user()->authorisation_level === 'Admin')
            return $next($request);

        return redirect('/home');
    }
}
