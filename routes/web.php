<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page', ['title' => 'Landing Page']);
});

// Admin
Route::get('/admin-dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin-sign-in', [AdminController::class, 'signIn']);
Route::get('/admin-daftar-loker', [AdminController::class, 'daftarLoker']);
Route::get('/admin-daftar-peminjaman', [AdminController::class, 'daftarPeminjaman']);
Route::get('/admin-riwayat-peminjaman', [AdminController::class, 'riwayatPeminjaman']);
Route::get('/admin-daftar-ulasan', [AdminController::class, 'daftarUlasan']);

// Locker
Route::get('/locker', function () {
    return view('layout/locker-layout', ['title' => 'Peminjaman Loker']);
});
