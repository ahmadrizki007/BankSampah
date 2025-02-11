<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilePrevController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile/prev', [ProfilePrevController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfilePrevController::class, 'update'])->name('profile.update');
    Route::delete('/profile/destroy', [ProfilePrevController::class, 'destroy'])->name('profile.destroy');

    Route::get('/profil', [ProfileController::class, 'index'])->name('profile');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

require __DIR__ . '/auth.php';