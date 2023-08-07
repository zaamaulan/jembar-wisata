<?php

use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\LoginController;
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

Route::get('/fasilitas', function () {

    return view('fasilitas.index');
});

Route::get('/promo', function () {

    return view('promo');
});
Route::get('/pesan-tiket', function () {

    return view('pesan-tiket');
});

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Halaman Admin, Route Grouping
Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->middleware('auth');

    Route::get('/blog', function () {
        return view('admin.blog');
    })->middleware('auth');

    Route::get('/fasilitas', function () {
        return view('admin.fasilitas');
    })->middleware('auth');

    Route::get('/promo', function () {
        return view('admin.promo');
    })->middleware('auth');
});
