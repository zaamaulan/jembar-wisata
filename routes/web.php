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
Route::get('/fasilitas', function () {
    return view('fasilitas');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/promo', function () {
    return view('promo');
});
Route::get('/pesan-tiket', function () {
    return view('pesan-tiket');
});

Route::get('fasilitas/KolamRenangAnak', function () {
    return view('KolamRenangAnak');
});

Route::get('fasilitas/PatungPatungUnik', function () {
    return view('PatungPatungUnik');
});

Route::get('fasilitas/FasilitasNonAir', function () {
    return view('FasilitasNonAir');
});

Route::get('/signin', [App\Http\Controllers\signinController::class, 'index'])->name('signin');

Route::get('/post', [PostController::class, 'index']); // Post Controller with index function
