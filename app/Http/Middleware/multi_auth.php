<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class multi_auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentPath = $request->path();


        if (Auth::check()) {
            // Prevent user open the admin routes only
            if (Auth::user()->role === 'user' && str_starts_with($currentPath, 'admin')) {
                return redirect()->back();
            }

            // Prevent admin open the user routes only
            if (Auth::user()->role === 'admin' && !str_starts_with($currentPath, 'admin')) {
                return redirect()->back();
            }
        }


        return $next($request);
    }
}
