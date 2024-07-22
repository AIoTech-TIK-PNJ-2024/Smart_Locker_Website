<?php

namespace App\Http\Controllers;

use App\Models\Locker;
use App\Models\Review;
use App\Models\RiwayatPeminjaman;
use App\Models\User;
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
            'email' => 'required|email',
            'password' => 'required|min:8',
        ], [
            'email.required' => 'Username wajib diisi',
            'email.email' => 'gunakan email dengan format benar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimal berisi 8 karakter',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role == 'admin') {
                return redirect()->intended('/admin/home')->with('sukses', 'Selamat datang ' . Auth::user()->username);
            } else {
                Auth::logout();
                return back()->withErrors(['failed' => 'Anda tidak memiliki akses admin.']);
            }
        }
        return back()->withErrors([
            'failed' => 'Username atau password salah.',
        ]);
    }

}
