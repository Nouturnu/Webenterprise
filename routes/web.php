<?php

use Illuminate\Support\Facades\Route;

// Rute ini untuk Halaman Utama (http://localhost:8000)
// Ini sudah ada
Route::get('/', function () {
    return view('home');
});

// --- TAMBAHKAN KODE BARU DI BAWAH INI ---

// Rute ini untuk Halaman "Tentang Kami" (http://localhost:8000/tentang-kami)
// Ini memberitahu Laravel untuk mencari file bernama 'tentang-kami.blade.php'
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

// (Kita siapkan juga untuk halaman 'Layanan Kami' nanti)
Route::get('/layanan-kami', function () {
    return view('layanan-kami');
});

