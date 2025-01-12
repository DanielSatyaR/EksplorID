<?php

use App\Http\Controllers\BaliController;
use App\Http\Controllers\BandungController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\JakartaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MalangController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SemarangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YogyaController;
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
    Route::delete('/dashboard/users/{users}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/dashboard/destinasi-wisata/create/checkSlug', [DestinasiController::class, 'checkSlug'])->name('destinasi.checkSlug');
    Route::resource('/dashboard/destinasi-wisata', DestinasiController::class)->parameters([
        'destinasi-wisata' => 'destinasi:slug'
    ]);
    Route::resource('/dashboard/kategori', KategoriController::class)->middleware('auth');
    Route::get('/dashboard/kategori/create/checkSlug', [KategoriController::class, 'checkSlug'])->name('kategori.checkSlug');
});

// Halaman Destinasi
Route::view('destinasi', 'destinasi.destinasi', ['title' => 'Destinasi'])->name('destinasi');

// Halaman Lainnya
Route::get('/keranjang', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/keranjang/{cart}', [CartController::class, 'remove'])->name('cart.remove');

Route::view('/pesanan', 'pesanan', ['title' => 'Pesanan']);
Route::view('/pembayaran', 'pembayaran', ['title' => 'Pembayaran'])->name('payment.create');
// Route::get('/payment', [PaymentController::class, 'showPaymentPage'])->middleware('auth');


// ------------------------ WISATA ---------------------

// WISATA BALI
Route::get('/bali', [BaliController::class, 'index'])->name('bali');
Route::get('/bali/{slug}', [BaliController::class, 'show'])->name('bali.show');

// WISATA BANDUNG
Route::get('/bandung', [BandungController::class, 'index'])->name('bandung');
Route::get('/bandung/{slug}', [BandungController::class, 'show'])->name('bandung.show');

// WISATA JAKARTA
Route::get('/jakarta', [JakartaController::class, 'index'])->name('jakarta');
Route::get('/jakarta/{slug}', [JakartaController::class, 'show'])->name('jakarta.show');

// WISATA MALANG
Route::get('/malang', [MalangController::class, 'index'])->name('malang');
Route::get('/malang/{slug}', [MalangController::class, 'show'])->name('malang.show');

// WISATA YOGYAKARTA
Route::get('/yogya', [YogyaController::class, 'index'])->name('yogya');
Route::get('/yogya/{slug}', [YogyaController::class, 'show'])->name('yogya.show');

// WISATA SEMARANG
Route::get('/semarang', [SemarangController::class, 'index'])->name('semarang');
Route::get('/semarang/{slug}', [SemarangController::class, 'show'])->name('semarang.show');
