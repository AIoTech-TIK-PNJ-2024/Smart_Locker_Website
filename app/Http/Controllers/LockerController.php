<?php

namespace App\Http\Controllers;

class LockerController extends Controller 
{
    public function login(){
        return view('locker.login', [
            'title' => 'Login | Peminjaman Loker',
        ]);
    }

    public function verify_email(){
        return view('locker.verify-email', [
            'title' => 'Verify Email | Peminjaman Loker'
        ]);
    }
}