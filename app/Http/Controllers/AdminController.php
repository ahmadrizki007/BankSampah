<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('login', [
            'admin' => true,
        ]);
    }

    public function dashboard()
    {
        return view('admins.dashboard');
    }

    public function dataTransaksi()
    {
        return view('admins.data-transaksi');
    }

    public function dataSampah()
    {
        return view('admins.data-sampah');
    }

    public function validasiPenarikan()
    {
        return view('admins.validasi-penarikan');
    }

    public function donasiGajah()
    {
        return view('admins.donasi-gajah');
    }

    public function userManagement()
    {
        return view('admins.user-management');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return back()->withErrors(
                [
                    'email' => [
                        'message' => 'Email tidak terdaftar',
                    ],
                ]
            )->withInput();

        } elseif ($user && $user->role != 'admin') {
            return back()->withErrors([
                'error' => [
                    'message' => 'Anda tidak memiliki akses ke halaman ini',
                ]
            ])->withInput();
        }

        if (!Auth::attempt($credentials)) {
            return back()->withErrors(
                [
                    'password' => [
                        'message' => 'Password salah',
                    ],
                ]
            )->withInput();
        }

        $request->session()->regenerate();

        return redirect()->intended(route('admin.dashboard', absolute: false));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('admin.login'));
    }
}
