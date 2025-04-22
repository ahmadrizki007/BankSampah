<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataSampahController;
use App\Http\Controllers\DonasiGajahController;
use App\Http\Controllers\PenarikanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

// ADMIN
Route::middleware(['auth', 'multi_auth'])->prefix('admin')->group(function () {

    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/data-transaksi', [TransaksiController::class, 'indexAdmin'])->name('admin.dataTransaksi');
    Route::post('/data-transaksi', [TransaksiController::class, 'storeAdmin'])->name('admin.dataTransaksi.store');

    Route::get('/data-sampah', [DataSampahController::class, 'index'])->name('admin.dataSampah');
    Route::post('/data-sampah', [DataSampahController::class, 'store'])->name('admin.dataSampah.store');
    Route::put('/data-sampah', [DataSampahController::class, 'update'])->name('admin.dataSampah.update');
    Route::delete('/data-sampah/{id}', [DataSampahController::class, 'destroy'])->name('admin.dataSampah.destroy')->where('id', '[0-9]+');

    Route::get('/validasi-penarikan', [PenarikanController::class, 'indexAdmin'])->name('admin.validasiPenarikan');
    Route::post('/validasi-penarikan/terima', [PenarikanController::class, 'terimaPenarikan'])->name('admin.validasiPenarikan.terima');
    Route::post('/validasi-penarikan/tolak', [PenarikanController::class, 'tolakPenarikan'])->name('admin.validasiPenarikan.tolak');

    Route::get('/donasi-gajah', [DonasiGajahController::class, 'indexAdmin'])->name('admin.donasiGajah');

    Route::get('/produk', [ProductController::class, 'index'])->name('admin.produk');
    Route::get('/produk/tambah', [ProductController::class, 'create'])->name('admin.produk.tambah');
    Route::post('/produk/tambah', [ProductController::class, 'store'])->name('admin.produk.tambah.store');

    Route::get('/produk/edit/{id}', [ProductController::class, 'edit'])->name('admin.produk.edit')->where('id', '[0-9]+');
    Route::put('/produk/edit', [ProductController::class, 'update'])->name('admin.produk.edit.update');

    Route::delete('/produk/hapus', [ProductController::class, 'destroy'])->name('admin.produk.destroy');
});