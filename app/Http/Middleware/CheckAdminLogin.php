<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAuth
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // If not logged in, push back to login page
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}
