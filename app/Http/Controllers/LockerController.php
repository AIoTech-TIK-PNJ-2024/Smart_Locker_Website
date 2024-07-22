<?php

namespace App\Http\Controllers;

class LockerController extends Controller
{
    public function login()
    {
        return view('locker.login', [
            'title' => 'Login | Peminjaman Loker',
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
        return view('locker.home', [
            'title' => 'Home | Peminjaman Loker',
        ]);
    }

    public function terimakasih()
    {
        return view('locker.terimakasih', [
            'title' => 'Terima Kasih telah menggunakan Smart Locker',
        ]);
    }

    public function review()
    {
        return view('locker.review', [
            'title' => 'Ulasan | Peminjaman Loker',
        ]);
    }
}
