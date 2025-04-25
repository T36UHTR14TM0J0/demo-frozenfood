<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Jika user tidak terautentikasi, redirect ke login
        if (!Auth::check()) {
            return redirect()
                ->route('login')
                ->with('error', 'Please login to access this page.');
        }

        // Jika user bukan admin, tampilkan error
        if (!Auth::user()->isAdmin()) {
            // Untuk API atau aplikasi strict, bisa menggunakan:
            // abort(403, 'Administrator access required.');
            
            return redirect()
                ->route('dashboard')
                ->with('error', 'You do not have administrator privileges.');
        }

        return $next($request);
    }
}