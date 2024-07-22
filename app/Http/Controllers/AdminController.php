<?php

namespace App\Http\Controllers;

use App\Models\Locker;
use App\Models\User;
use App\Models\Review;
use App\Models\RiwayatPeminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'pengguna' => User::all(),
        ]);
    }
    public function riwayatPeminjaman()
    {
        return view('admin.riwayat-peminjaman', [
            'title' => 'Admin | Riwayat Peminjaman',
            'riwayat' => RiwayatPeminjaman::all(),
        ]);
    }
    public function daftarUlasan()
    {
        return view('admin.daftar-ulasan', [
            'title' => 'Admin | Daftar Ulasan',
            'ulasan' => Review::all(),
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

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

}