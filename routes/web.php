<?php

use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanTiketController;
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
Route::get('/blog', [PostController::class, 'slug']);
Route::get('/pesan-tiket', [PostController::class, 'index']);
Route::get('/promo', [PromoController::class, 'index']);
Route::get('/pesan-tiket', [PesanTiketController::class, 'index']);

Route::get('/fasilitas', function () {

    return view('fasilitas.index');
});

Route::get('/promo', function () {

    return view('promo.index');
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
        return view('admin.blog.index');
    })->middleware('auth');

    Route::get('/fasilitas', function () {
        return view('admin.fasilitas.index');
    })->middleware('auth');

    Route::get('/promo', function () {
        return view('admin.promo.index');
    })->middleware('auth');

    Route::get('/account', function () {
        return view('admin.account.index');
    })->middleware('auth');

    Route::get('/tiket', function () {
        return view('admin.tiket.index');
    })->middleware('auth');

    Route::get('/setting', function () {
        return view('admin.setting.index');
    })->middleware('auth');
});

Route::post('/pesan-tiket', [PesanTiketController::class, 'store']);