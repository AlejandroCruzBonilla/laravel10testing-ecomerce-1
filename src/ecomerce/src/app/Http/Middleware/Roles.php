<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Roles
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
	 */
	public function handle(Request $request, Closure $next, ...$roles): Response
	{
		// dd($request->user()->hasAnyRole($roles));
		if (count($roles) === 0) {
			return $next($request);
		} else if (Auth::user() && $request->user()->hasAnyRole($roles)) {
			return $next($request);
		}
		abort(401, 'Unauthorized');
	}
}
