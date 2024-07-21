<?php

namespace App\Http\Controllers;

use App\Models\Locker;
use App\Models\User;
use App\Models\Review;
use App\Models\RiwayatPeminjaman;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', [
            'title' => 'Admin | Dashboard',
            'data' => User::all(),
            'locker' => Locker::all()->count(),
            'pengguna' => User::all()->count(),
            'ulasan' => Review::all()->count(),

        ]);
    }

    public function daftarLoker()
    {
        return view('admin.daftar-loker', [
            'title' => 'Admin | Daftar Loker',
            'locker' => Locker::all(),
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

    public function signIn()
    {
        return view('admin.sign-in', ['title' => 'Admin | Sign In']);
    }

    public function authentication(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8', // Tambahkan validasi untuk password
        ]);

        $email = 'admin@gmail.com';
        $pw = '1sampai8';

        $credentials = $request->only('email', 'password');

        if ($credentials['email'] === $email && $credentials['password'] === $pw) {
            return redirect()->intended('/admin-dashboard');
        } else {
            return redirect()->back()->withErrors(['error' => 'Email atau password salah.']);
        }
        
        dd($credentials);
    }

}
