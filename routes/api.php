<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::middleware('auth:sanctum')->group(function () {

    Route::get('search-user', function (Request $request) {
        $q = $request->input('q');

        return User::where('name', 'like', '%' . $q . '%')
            ->limit(3)
            ->get(['id', 'name']);
    });

});
