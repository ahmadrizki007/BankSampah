<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->group(function () {

    Route::get('/search-user', function (Request $request) {
        $q = $request->input('q');

        $data = User::where('name', 'like', '%' . (string) $q . '%')
            ->whereNot('role', 'admin')
            ->limit(3)
            ->get(['id', 'name']);

        return response()->json([
            'data' => $data,
        ]);
    });

});
