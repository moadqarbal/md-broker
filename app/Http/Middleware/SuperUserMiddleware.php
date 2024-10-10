<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SuperUserMiddleware
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
        // Check if the user is authenticated and has the role 'su'
        if (Auth::check() && Auth::user()->role === 'su') {
            return $next($request); // Allow access if the user is a super user
        }

        // Redirect to an unauthorized page or abort with 403
        //return abort(403, 'Unauthorized access!'); // Sends a 403 Forbidden response
        return redirect()->route('unauthorized')->withErrors(['error' => 'Unauthorized access!']);

        // Or if you prefer to redirect:
        // return redirect()->route('unauthorized')->withErrors(['error' => 'Unauthorized access!']);
    }
}