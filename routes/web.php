<?php

use App\Http\Controllers\DonasiGajahController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\PenarikanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;


// SEO
Route::get('/sitemap.xml', function () {
ob_clean();
    $sitemap = Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/tentang-kami'))
        ->add(Url::create('/kunjungan'))
        ->add(Url::create('/produk'));

    return $sitemap->toResponse(request());
});

// Tidak memerlukan login
Route::get('/', function () {
    return view('beranda');
})->name('/');

Route::get('/kunjungan', function () {
    return view('kunjungan');
})->name('kunjungan');

Route::get('/tentang-kami', function () {
    return view('about');
})->name('tentang-kami');

Route::get('/produk', function () {
    $data = Product::all();
    return view('product', [
        'data' => $data,
    ]);
})->name('produk');

Route::get('/formulir', [FormulirController::class, 'indexUser']);
Route::post('/formulir', [FormulirController::class, 'store'])->name('formulir.tambah');

Route::get('/kunjungan', function () {
    return view('kunjungan'); // 
});


// AUTH
require_once __DIR__ . '/auth.php';

Route::middleware(['auth', 'multi_auth', 'verified'])->group(function () {

    Route::get('/profile', action: [ProfileController::class, 'index'])->name('profile');

    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/edit', [ProfileController::class, 'handleEdit'])->name('profile.handleEdit');

    Route::get('/dashboard', [TransaksiController::class, 'indexDashboard'])->name('dashboard');
    Route::get('/transaksi', [TransaksiController::class, 'indexTransaksi'])->name('transaksi');
    Route::get('/penarikan', [PenarikanController::class, 'indexPenarikan'])->name('penarikan');

    Route::post('/donasi-gajah', [DonasiGajahController::class, 'donasiGajah'])->name('donasiGajah.donasi');
    Route::post('/tarik-saldo', [PenarikanController::class, 'tarikSaldo'])->name('penarikan.tarikSaldo');

});

// ADMIN
require_once __DIR__ . '/admin.php';
