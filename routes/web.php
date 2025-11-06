<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Rute Halaman Utama (sudah ada)
Route::get('/', function () {
    return view('home');
});

// Rute Halaman "Tentang Kami" (sudah ada)
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

// Rute Halaman "Layanan Kami" (sudah ada)
Route::get('/layanan-kami', function () {
    return view('layanan-kami');
});

// Rute Halaman "Artikel" (sudah ada)
Route::get('/artikel', function () {
    return view('artikel');
});

// Rute Halaman Kontak (GET & POST)
Route::get('/hubungi-kami', [ContactController::class, 'index'])->name('contact.index');
Route::post('/hubungi-kami', [ContactController::class, 'store'])->name('contact.store');