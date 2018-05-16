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
        if(Auth::user()->Authorisation_Level === "Staff")
            return redirect('/home');
        if(Auth::user()->Authorisation_Level === 'Admin')
            return $next($request);

        return redirect('/home');
    }
}
