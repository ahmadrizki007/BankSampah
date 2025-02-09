<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// INI CUMAN BUAT DEV AJA
Route::get('/tentang-kami', function () {
    return view('about');
});

Route::get('/produk', function () {
    return view('product');
});

Route::get('/', function () {
    return view('beranda');
})->name('/');


Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

require __DIR__ . '/auth.php';
