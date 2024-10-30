<?php

use App\Http\Controllers\PenggunaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('pengguna',[PenggunaController::class,'getPengguna']);

Route::post('pengguna',[PenggunaController::class,'storePengguna']);

Route::delete('pengguna/{id}',[PenggunaController::class, 'destroyPengguna']);