<?php

use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama (homepage)
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk halaman profil
Route::get('/profile', function () {
    return view('profile');
});

// Rute untuk halaman event
Route::get('/event', function () {
    return view('event');
});

// Rute untuk halaman lapor insiden
Route::get('/lapor-insiden', function () {
    return view('lapor-insiden');
});

// RUTE BARU: Rute untuk halaman kontak kami
Route::get('/kontak', function () {
    return view('kontak');
});
