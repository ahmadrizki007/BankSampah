<?php

use App\Http\Controllers\profileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// API

Route::get('/search-user', function (Request $request) {
    $query = $request->input('query');

    // return User::where('name', 'like', '%{$query}%')
    //     ->limit(5)
    //     ->get(['id', 'name']);

    return User::where('name', 'like', '%' . $query . '%')->get();
});

// ga perlu login
Route::get('/', function () {
    return view('beranda');
})->name('/');

Route::get('/kunjungan', function () {
    return view('kunjungan');
});

Route::get('/tentang-kami', function () {
    return view('about');
});

Route::get('/produk', function () {
    return view('product');
});

Route::get('/formulir', function () {
    return view('formulir'); // 
});

Route::get('/kunjungan', function () {
    return view('kunjungan'); // 
});


// AUTH
require_once __DIR__ . '/auth.php';

Route::middleware(['auth', 'multi_auth', 'verified'])->group(function () {

    Route::get('/profile', action: [profileController::class, 'index'])->name('profile');

    Route::get('/profile/edit', [profileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/edit', [profileController::class, 'handleEdit'])->name('profile.handleEdit');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/transaksi', function () {
        return view('transaksi');
    })->name('transaksi');

    Route::get('/penarikan', function () {
        return view('penarikan');
    })->name('penarikan');


});

// ADMIN
require __DIR__ . '/admin.php';