<?php

use App\Http\Controllers\profileController;
use App\Http\Controllers\profilePrevController;
use Illuminate\Support\Facades\Route;

// INI CUMAN BUAT DEV AJA

Route::get('/kunjungan', function () {
    return view('kunjungan');
});

Route::get('/tentang-kami', function () {
    return view('about');
});

Route::get('/produk', function () {
    return view('product');
});

Route::get('/', function () {
    return view('beranda');
})->name('/');

Route::get('/formulir', function () {
    return view('formulir'); // 
});

Route::get('/kunjungan', function () {
    return view('kunjungan'); // 
});

Route::middleware('auth')->group(function () {

    Route::get('/profile', action: [profileController::class, 'index'])->name('profile');



    Route::get('/profile/prev', [profilePrevController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [profilePrevController::class, 'update'])->name('profile.update');
    Route::delete('/profile/destroy', [profilePrevController::class, 'destroy'])->name('profile.destroy');



    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/transaksi', function () {
        return view('transaksi');
    })->name('transaksi');


});

require __DIR__ . '/auth.php';