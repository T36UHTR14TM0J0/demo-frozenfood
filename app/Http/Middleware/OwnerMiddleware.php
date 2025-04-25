<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class OwnerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Periksa apakah user terautentikasi dan memiliki role owner
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You need to login first.');
        }

        if (!Auth::user()->isOwner()) {
            // Jika ingin lebih aman, bisa return abort(403)
            return redirect()
                ->route('dashboard')
                ->with('error', 'Unauthorized access. Owner privileges required.');
        }

        return $next($request);
    }
}