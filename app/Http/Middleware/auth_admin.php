<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class auth_admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentPath = $request->path();

        if (!Auth::check() && $currentPath != 'admin/login') {
            return redirect()->route('admin.login')->withErrors(
                [
                    'error' => [
                        'message' => 'Anda harus login terlebih dahulu sebagai admin.',
                    ]
                ]
            );
        }

        if (Auth::check() && Auth::user()->role != 'admin') {
            return redirect()->route('admin.login')->withErrors(
                [
                    'error' => [
                        'message' => 'Anda tidak memiliki akses sebagai admin.',
                    ]
                ]
            );
        }
        return $next($request);
    }
}
