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
        if (Auth::check() && Auth()->user()->role != 'admin') {
            return redirect('/locker/home');
        }

        return view('admin.dashboard', [
            'title' => 'Admin | Dashboard',
            'data' => User::where('role', 'pengguna')->get(),
            'locker' => Locker::all()->count(),
            'pengguna' => User::where('role', 'pengguna')->count(),
            'ulasan' => Review::all()->count(),

        ]);
    }

    public function daftarLoker()
    {
        if (Auth::check() && Auth()->user()->role != 'admin') {
            return redirect('/locker/home');
        }

        return view('admin.daftar-loker', [
            'title' => 'Admin | Daftar Loker',
            'locker' => Locker::all(),
        ]);
    }
    public function daftarPeminjaman()
    {
        if (Auth::check() && Auth()->user()->role != 'admin') {
            return redirect('/locker/home');
        }

        return view('admin.daftar-peminjaman', [
            'title' => 'Admin | Daftar Peminjaman',
            'pengguna' => User::where('role', 'pengguna')->get(),
        ]);
    }
    public function riwayatPeminjaman()
    {
        if (Auth::check() && Auth()->user()->role != 'admin') {
            return redirect('/locker/home');
        }

        return view('admin.riwayat-peminjaman', [
            'title' => 'Admin | Riwayat Peminjaman',
            'riwayat' => RiwayatPeminjaman::where('role', 'pengguna')->get(),
        ]);
    }
    public function daftarUlasan()
    {
        if (Auth::check() && Auth()->user()->role != 'admin') {
            return redirect('/locker/home');
        }

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
            'username' => 'required',
            'password' => 'required|min:8',
        ], [
            'username.required' => 'Username wajib diisi',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimal berisi 8 karakter',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role == 'admin') {
                return redirect()->intended('/admin-dashboard')->with('sukses', 'Selamat datang ' . Auth::user()->username);
            } else {
                Auth::logout();
                return back()->withErrors(['failed' => 'Anda tidak memiliki akses admin.']);
            }
        }
        return back()->withErrors([
            'failed' => 'Username atau password salah.',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin-sign-in');
    }
}