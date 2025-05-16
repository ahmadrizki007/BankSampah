<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
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
    public function attempt(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ], [
            'email.required' => "Email harus diisi",
            'email.email' => "Format email salah",
            'password.required' => "Password harus diisi",
            'password.min' => "Password minimal 8 karakter",
        ]);

        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return redirect()->back()->withErrors([
                'email' => [
                    'message' => "Email belum terdaftar",
                ]
            ]);
        }

        if (!Auth::attempt($credentials)) {
            return redirect()->back()->withErrors([
                "password" => [
                    "message" => "Password salah",
                ]
            ]);
        }

        $request->session()->regenerate();

        if ($user->role === 'user') {
            return redirect()->route('dashboard');
        }

        return redirect()->route('admin.dashboard');

    }

    /**
     * Destroy an authenticated session.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
