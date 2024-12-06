<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/createacc', function () {
    return view('createacc');
});

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

