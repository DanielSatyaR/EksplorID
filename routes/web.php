<?php

use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/homepage', function () {
    return view('homepage', ['title' => 'Home Page']);
});

Route::get('/destinasi/{destinasi:slug}', function (App\Models\Destinasi $destinasi) {
    return view('destinasi', [
        'title' => 'Single Destinasi',
        'destinasi' => $destinasi
    ]);
});

// Authors and Categories
Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', [
        'title' => count($user->posts) . ' Articles By ' . $user->name,
        'posts' => $user->posts,
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => 'Articles in: ' . $category->name,
        'posts' => $category->posts,
    ]);
});

// Authentication Routes
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/createacc', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/createacc', [RegisterController::class, 'store']);

// Dashboard Routes
Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard/index', 'dashboard.index', ['title' => 'Halaman Dashboard']);
    Route::view('/dashboard/user', 'dashboard.user', ['title' => 'Halaman Dashboard']);

    // Destinasi Wisata
    Route::get('/dashboard/destinasi-wisata/create', [DestinasiController::class, 'create'])->name('destinasi.create');
    Route::get('/dashboard/destinasi-wisata/create/checkSlug', [DestinasiController::class, 'checkSlug']);
    Route::resource('/dashboard/destinasi-wisata', DestinasiController::class);

    // Tambahan Dashboard Routes
    Route::view('/dashboard/destinasi-wisata', 'dashboard.destinasi-wisata.destinasi', ['title' => 'Halaman Dashboard']);
});

// Halaman Destinasi
Route::view('/destinasi', 'destinasi', ['title' => 'Destinasi']);

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
