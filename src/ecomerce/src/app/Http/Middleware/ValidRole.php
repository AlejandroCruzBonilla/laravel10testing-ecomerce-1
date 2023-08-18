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
	public function handle(Request $request, Closure $next, $roles = ['guest']): Response
	{

		// dd($roles);

		// TODO: Implement array of roles
		if ($roles === 'guest') {
			return $next($request);
		} else if (Auth::user() && $request->user()->hasAnyRole($roles)) {
			return $next($request);
		}
		abort(401, 'Unauthorized');
	}
}
