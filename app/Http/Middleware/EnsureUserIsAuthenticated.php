<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUserIsAuthenticated
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
        // Check if the user is not authenticated
        if (!auth()->check()) {
            // Redirect the user to the login page
            return redirect()->route('login')->with('error', 'You need to be logged in to access this page.');
        }

        // If the user is authenticated, allow the request to proceed
        return $next($request);
    }
}

