<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


// ADMIN
Route::middleware(['auth_admin'])->prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'store'])->name('admin.store');

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

});