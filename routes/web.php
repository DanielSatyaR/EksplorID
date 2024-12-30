<?php

use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/createacc', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/createacc', [RegisterController::class, 'store']);

Route::get('/dashboard.index', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/destinasi-wisata/destinasi', DestinasiController::class)->middleware('auth');

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


// ------------------------ WISATA ---------------------

// WISATA BANDUNG


Route::get('/bandung/dagodream', function () {
    return view('/bandung/dagodream');
});

Route::get('/bandung/dranch', function () {
    return view('/bandung/dranch');
});

Route::get('/bandung/kawahputih', function () {
    return view('/bandung/kawahputih');
});

// WISATA BALI

Route::get('/bali/balisafari', function () {
    return view('/bali/balisafari');
});


Route::get('/bali/balibird', function () {
    return view('/bali/balibird');
});

Route::get('/bali/kecakuluwatu', function () {
    return view('/bali/kecakuluwatu');
});


// WISATA JAKARTA

Route::get('/jakarta/TamanMini', function () {
    return view('/jakarta/TamanMini');
});

Route::get('/jakarta/dufan', function () {
    return view('/jakarta/dufan');
});

Route::get('/jakarta/aquarium', function () {
    return view('/jakarta/aquarium');
});

// WISATA YOGYAKARTA

Route::get('/yogyakarta/borobudur', function () {
    return view('/yogyakarta/borobudur');
});

Route::get('/yogyakarta/prambanan', function () {
    return view('/yogyakarta/prambanan');
});

Route::get('/yogyakarta/tamansari', function () {
    return view('/yogyakarta/tamansari');
});


// WISATA MALANG

Route::get('/malang/jatim1', function () {
    return view('/malang/jatim1');
});

Route::get('/malang/jatim2', function () {
    return view('/malang/jatim2');
});

Route::get('/malang/jatim3', function () {
    return view('/malang/jatim3');
});

// WISATA SEMARANG

Route::get('/semarang/saloka', function () {
    return view('/semarang/saloka');
});
