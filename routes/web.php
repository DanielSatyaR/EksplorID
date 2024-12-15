<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/createacc', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/createacc', [RegisterController::class, 'store']);

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/destinasi', function () {
    return view('destinasi');
});

Route::get('/bandung', function () {
    return view('bandung');
});

Route::get('/jakarta', function () {
    return view('jakarta');
});

Route::get('/bali', function () {
    return view('bali');
});

Route::get('/yogya', function () {
    return view('yogya');
});

Route::get('/malang', function () {
    return view('malang');
});

Route::get('/semarang', function () {
    return view('semarang');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/pesanan', function () {
    return view('pesanan');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/dagodream', function () {
    return view('dagodream');
});
