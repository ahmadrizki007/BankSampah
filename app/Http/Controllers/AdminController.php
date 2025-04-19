<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function dashboard()
    {
        $data = User::where('role', 'user')->get();
        return view('admins.dashboard', [
            'data' => $data,
        ]);
    }

    public function validasiPenarikan()
    {
        return view('admins.validasi-penarikan');
    }

    public function donasiGajah()
    {
        return view('admins.donasi-gajah');
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
}
