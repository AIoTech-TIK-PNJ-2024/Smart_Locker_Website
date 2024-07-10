<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', [
            'title' => 'Admin | Dashboard',
        ]);
    }
    public function daftarLoker()
    {
        return view('admin.daftar-loker', [
            'title' => 'Admin | Daftar Loker',
        ]);
    }
    public function daftarPeminjaman()
    {
        return view('admin.daftar-peminjaman', [
            'title' => 'Admin | Daftar Peminjaman',
        ]);
    }
    public function riwayatPeminjaman()
    {
        return view('admin.riwayat-peminjaman', [
            'title' => 'Admin | Riwayat Peminjaman',
        ]);
    }
    public function daftarUlasan()
    {
        return view('admin.daftar-ulasan', [
            'title' => 'Admin | Daftar Ulasan',
        ]);
    }

}
