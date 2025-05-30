<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()
        ->intended(route('dashboard', absolute: false))
        ->with('success', 'Login berhasil! Selamat datang kembali.');

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Logout user dari guard 'web'
        Auth::guard('web')->logout();

        // Menghapus semua session data
        $request->session()->invalidate();

        // Menghasilkan token session baru
        $request->session()->regenerateToken();

        // Redirect ke halaman login setelah logout
        return redirect()->route('login')->with('status', 'Anda telah berhasil logout.');
    }
}
