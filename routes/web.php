<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

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

Route::get('/post', [PostController::class, 'index']); // Post Controller with index function