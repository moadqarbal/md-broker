<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && (Auth::user()->role === 'admin' || Auth::user()->role === 'su')) {
            return $next($request); // Allow access for admin and superuser
        }

        // Redirect or abort if the user does not have access
        return redirect()->route('unauthorized')->withErrors(['forbidden' => 'You do not have permission to access this page.']);
    }
}
