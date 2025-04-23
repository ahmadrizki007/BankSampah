<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'max:255', Rule::unique(User::class, 'name')],
            'email' => ['required', 'email', 'max:255', Rule::unique(User::class, 'email')],
            'age' => ['required'],
            'gender' => ['required'],
            'phone' => ['required'],
            'password' => ['required', 'min:8'],
            // 'password' => ['required', Rules\Password::defaults()],
        ], [
            'username.required' => 'Username harus diisi',
            'username.max' => 'Username maksimal 255 karakter',
            'username.unique' => 'Username sudah terdaftar',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email harus valid',
            'email.unique' => 'Email sudah terdaftar',
            'age.required' => 'Umur harus diisi',
            'gender.required' => 'Jenis Kelamin harus diisi',
            'phone.required' => 'Nomor telepon harus diisi',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 8 karakter',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'age' => $request->age,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));  // trigger listener email verification

        Auth::login($user);

        return redirect(route('login', absolute: false))->with('success', 'Registrasi berhasil');
    }
}
