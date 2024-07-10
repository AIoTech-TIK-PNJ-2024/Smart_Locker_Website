<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/admin-dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin-daftar-loker', [AdminController::class, 'daftarLoker']);
Route::get('/admin-daftar-peminjaman', [AdminController::class, 'daftarPeminjaman']);
Route::get('/admin-riwayat-peminjaman', [AdminController::class, 'riwayatPeminjaman']);
Route::get('/admin-daftar-ulasan', [AdminController::class, 'daftarUlasan']);
