<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/produk', function(){
    return view('product');
});

Route::get('/login', function () {
    return view('login'); 
})->name('login');

Route::get('/register', function () {
    return view('register'); 
})->name('register');
