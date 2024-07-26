<?php

namespace App\Http\Controllers;

use App\Models\RiwayatPeminjaman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LockerController extends Controller
{
    public function login()
    {
        $peminjam2 = User::where('id_locker', '1')->exists();

        // dd($peminjam2);

        return view('locker.login', [
            'title' => 'Login | Peminjaman Loker',
            'cek' => $peminjam2,
        ]);
    }

    public function verify_email()
    {
        return view('locker.verify-email', [
            'title' => 'Verify Email | Peminjaman Loker',
        ]);
    }

    public function home()
    {
        if (Auth::check() && Auth()->user()->role != 'pengguna') {
            return redirect('/admin-dashboard');
        }

        return view('locker.home', [
            'title' => 'Home | Peminjaman Loker',
        ]);
    }

    public function terimakasih()
    {
        if (Auth::check() && Auth()->user()->role != 'pengguna') {
            return redirect('/admin-dashboard');
        }

        return view('locker.terimakasih', [
            'title' => 'Terima Kasih telah menggunakan Smart Locker',
        ]);
    }

    public function review()
    {
        if (Auth::check() && Auth()->user()->role != 'pengguna') {
            return redirect('/admin-dashboard');
        }

        return view('locker.review', [
            'title' => 'Ulasan | Peminjaman Loker',
        ]);
    }

    public function authentication(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required|min:8',
        ], [
            'username.required' => 'Username wajib diisi',
            'password.required' => 'Password wajib diisi',
            'password.min:8' => 'minimal berisi 8 karakter',
        ]);

        $peminjam = User::where('username', $credentials['username'])->first();
        $peminjam2 = User::where('id_locker', '1')->first();

        if ($peminjam2 && $peminjam2->username !== $credentials['username']) {
            return back()->withErrors(['failed' => 'Locker sudah dimiliki pengguna lain.']);
        }

        if (!$peminjam) {
            $peminjam = User::create([
                'username' => $credentials['username'],
                'password' => bcrypt($credentials['password']),
                'id_locker' => 1,
            ]);
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/locker/home')->with('sukses', 'selamat datang ' . Auth()->user()->username);
        }

        return back()->withErrors([
            'failed' => 'Username atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/locker/login');
    }

    public function selesaikanPeminjaman(Request $request)
    {
        RiwayatPeminjaman::create([
            'username' => Auth()->user()->username,
            'id_locker' => Auth()->user()->id_locker,
            'durasi' => ceil(Auth()->user()->created_at->diffInMinutes(now())),
        ]);

        User::find(Auth()->user()->id)->delete();

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/locker/login')->with('selesai', 'Peminjaman loker selesai');
    }

}
