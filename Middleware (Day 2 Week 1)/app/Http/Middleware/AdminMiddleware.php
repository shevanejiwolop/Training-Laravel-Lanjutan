<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
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
        if (Auth::user()->isUser()) {
            if ($request->route()->named('user')) {
                return $next($request);
            } else {
                abort(403);
            }
        }
        if (Auth::user()->isAdmin()) {
            if ($request->route()->named('user')) {
                return $next($request);
            } elseif ($request->route()->named('admin')) {
                return $next($request);
            } else {
                abort(403);
            }
        }

        if (Auth::user()->isSuperAdmin()) {
            return $next($request);
        }
    }
}
