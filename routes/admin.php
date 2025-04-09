<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


// ADMIN
Route::middleware(['auth_admin'])->prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'store'])->name('admin.store');
    Route::post('/logout', [AdminController::class, 'destroy'])->name('admin.logout');

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/data-transaksi', [AdminController::class, 'dataTransaksi'])->name('admin.dataTransaksi');
    Route::get('/data-sampah', [AdminController::class, 'dataSampah'])->name('admin.dataSampah');
    Route::get('/validasi-penarikan', [AdminController::class, 'validasiPenarikan'])->name('admin.validasiPenarikan');

});