<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LockerController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
Route::post('/index-review', [ReviewController::class, 'review']);

// Admin
Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->middleware('auth');
Route::get('/admin-sign-in', [AdminController::class, 'signIn'])->middleware('guest');
Route::get('/admin-daftar-loker', [AdminController::class, 'daftarLoker'])->middleware('auth');
Route::get('/admin-daftar-peminjaman', [AdminController::class, 'daftarPeminjaman'])->middleware('auth');
Route::post('/admin-daftar-peminjaman', [AdminController::class, 'hapusPeminjam'])->middleware('auth');
Route::get('/admin-riwayat-peminjaman', [AdminController::class, 'riwayatPeminjaman'])->middleware('auth');
Route::get('/admin-daftar-ulasan', [AdminController::class, 'daftarUlasan'])->middleware('auth');
Route::post('/admin-daftar-ulasan-delete', [AdminController::class, 'hapusUlasan'])->middleware('auth');
Route::post('/admin-authentication', [AdminController::class, 'authentication']);
Route::get('/admin-logout', [AdminController::class, 'logout'])->middleware('auth');

// Locker
Route::get('/locker/login', [LockerController::class, 'login'])->middleware('guest');
Route::post('/locker/login', [LockerController::class, 'authentication']);
Route::get('/locker/logout', [LockerController::class, 'logout'])->middleware('auth');
Route::get('/locker/end', [LockerController::class, 'selesaikanPeminjaman'])->middleware('auth');
Route::get('/locker/verify_email', [LockerController::class, 'verify_email'])->Middleware('auth');
Route::get('/locker/home', [LockerController::class, 'home'])->Middleware('auth');
Route::get('/locker/terimakasih', [LockerController::class, 'terimakasih'])->Middleware('auth');
Route::get('/locker/review', [LockerController::class, 'review'])->Middleware('auth');

// ESP32
Route::get('/open-door', [UserController::class, 'openDoor']);
