<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ValidRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, String $role = 'guest'): Response
    {
        if ($role == 'guest') {
            return $next($request);
        } else if (Auth::user() && Auth::user()->role->name == $role) {
            return $next($request);
        }
        abort(401, 'Unauthorized');
    }
}
