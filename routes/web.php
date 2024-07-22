<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LockerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
Route::post('/index-review', [IndexController::class, 'review']);

// Admin
Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->middleware('auth');
Route::get('/admin-sign-in', [AdminController::class, 'signIn']);
Route::get('/admin-daftar-loker', [AdminController::class, 'daftarLoker'])->middleware('auth');
Route::get('/admin-daftar-peminjaman', [AdminController::class, 'daftarPeminjaman'])->middleware('auth');
Route::get('/admin-riwayat-peminjaman', [AdminController::class, 'riwayatPeminjaman'])->middleware('auth');
Route::get('/admin-daftar-ulasan', [AdminController::class, 'daftarUlasan'])->middleware('auth');
Route::post('/admin-authentication', [AdminController::class, 'authentication'])->middleware('auth');

// Locker
Route::get('/locker/login', [LockerController::class, 'login']);
Route::get('/locker/verify_email', [LockerController::class, 'verify_email']);
Route::get('/locker/home', [LockerController::class, 'home']);
Route::get('/locker/terimakasih', [LockerController::class, 'terimakasih']);
Route::get('/locker/review', [LockerController::class, 'review']);

Route::get('/open-door', [UserController::class, 'openDoor']);
