<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\TiketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Direct to Controller
Route::get('/fasilitas', [FasilitasController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/promo', [PromoController::class, 'index']);
Route::get('/pesan-tiket', [TiketController::class, 'index']);
