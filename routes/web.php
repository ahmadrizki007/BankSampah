<?php

use App\Http\Controllers\DonasiGajahController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\PenarikanController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\TransaksiController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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
    $data = Product::all();
    return view('product', [
        'data' => $data,
    ]);
});

Route::get('/formulir', [FormulirController::class, 'indexUser']);
Route::post('/formulir', [FormulirController::class, 'store'])->name('formulir.tambah');

Route::get('/kunjungan', function () {
    return view('kunjungan'); // 
});


// AUTH
require_once __DIR__ . '/auth.php';

Route::middleware(['auth', 'multi_auth', 'verified'])->group(function () {

    Route::get('/profile', action: [profileController::class, 'index'])->name('profile');

    Route::get('/profile/edit', [profileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/edit', [profileController::class, 'handleEdit'])->name('profile.handleEdit');

    Route::get('/dashboard', [TransaksiController::class, 'indexDashboard'])->name('dashboard');
    Route::get('/transaksi', [TransaksiController::class, 'indexTransaksi'])->name('transaksi');
    Route::get('/penarikan', [PenarikanController::class, 'indexPenarikan'])->name('penarikan');

    Route::post('/donasi-gajah', [DonasiGajahController::class, 'donasiGajah'])->name('donasiGajah.donasi');
    Route::post('/tarik-saldo', [PenarikanController::class, 'tarikSaldo'])->name('penarikan.tarikSaldo');

});

// ADMIN
require_once __DIR__ . '/admin.php';