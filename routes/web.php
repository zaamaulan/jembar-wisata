<?php

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

Route::get('/blog', [PostController::class, 'show']);
Route::get('/pesan-tiket', [PostController::class, 'index']);
Route::get('/promo', [PromoController::class, 'index']);
// Route::get('/pesan-tiket', [TiketController::class, 'index']);
Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/promo', function () {
    return view('promo');
});
Route::get('/pesan-tiket', function () {
    return view('pesan-tiket');
});