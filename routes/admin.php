<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DataSampahController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

// ADMIN
Route::middleware(['auth', 'multi_auth'])->prefix('admin')->group(function () {

    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/data-transaksi', [TransaksiController::class, 'index'])->name('admin.dataTransaksi');
    Route::post('/data-transaksi', [TransaksiController::class, 'store'])->name('admin.dataTransaksi.store');

    Route::get('/data-sampah', [DataSampahController::class, 'index'])->name('admin.dataSampah');
    Route::post('/data-sampah', [DataSampahController::class, 'store'])->name('admin.dataSampah.store');
    Route::put('/data-sampah', [DataSampahController::class, 'update'])->name('admin.dataSampah.update');
    Route::delete('/data-sampah/{id}', [DataSampahController::class, 'destroy'])->name('admin.dataSampah.destroy')->where('id', '[0-9]+');

    Route::get('/validasi-penarikan', [AdminController::class, 'validasiPenarikan'])->name('admin.validasiPenarikan');
    Route::get('/donasi-gajah', [AdminController::class, 'donasiGajah'])->name('admin.donasiGajah');
});