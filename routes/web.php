<?php

use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Route;

// INI CUMAN BUAT DEV AJA
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

Route::middleware('auth')->group(function () {

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