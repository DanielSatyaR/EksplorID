<?php

use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Homepage Route
Route::get('/homepage', function () {
    return view('homepage', ['title' => 'Home Page']);
})->name('homepage');

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/createacc', [RegisterController::class, 'index']);
    Route::post('/createacc', [RegisterController::class, 'store']);

    Route::get('auth/google', [GoogleController::class, 'redirect'])->name('google-auth');
    Route::get('auth/google/callback', [GoogleController::class, 'callbackGoogle']);
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard Routes
Route::middleware('auth')->group(function () {
    Route::view('/dashboard/index', 'dashboard.index', ['title' => 'Halaman Dashboard'])->name('dashboard');

    Route::get('/dashboard/destinasi-wisata', [DestinasiController::class, 'index'])->name('destinasi.index');

    Route::get('/dashboard/users', [UserController::class, 'index'])->name('users.index');
    Route::delete('/dashboard/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/dashboard/destinasi-wisata/create/checkSlug', [DestinasiController::class, 'checkSlug'])->name('destinasi.checkSlug');
    Route::resource('/dashboard/destinasi-wisata', DestinasiController::class)->parameters([
        'destinasi-wisata' => 'destinasi:slug'
    ]);
});

// Halaman Destinasi
Route::view('/destinasi', 'destinasi', ['title' => 'Destinasi'])->name('destinasi');

// Halaman Kota
$kotaRoutes = ['bandung', 'jakarta', 'bali', 'yogya', 'malang', 'semarang'];
foreach ($kotaRoutes as $kota) {
    Route::view("/$kota", $kota, ['title' => ucfirst($kota)]);
}

// Halaman Lainnya
Route::view('/keranjang', 'keranjang', ['title' => 'Keranjang']);
Route::view('/pesanan', 'pesanan', ['title' => 'Pesanan']);
Route::view('/pembayaran', 'pembayaran', ['title' => 'Pembayaran']);


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
