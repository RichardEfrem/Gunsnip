<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('loginadmin.index')->with('error', 'You must be logged in to access the admin area.');
        }

        if (Auth::user()->usertype !== 'Admin') {
            Auth::logout();
            return redirect()->route('loginadmin.index')->with('error', 'You do not have permission to access the admin area.');
        }

        return $next($request);
    }
}
