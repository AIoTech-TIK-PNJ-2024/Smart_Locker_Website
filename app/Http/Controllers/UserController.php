<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function openDoor()
    {
        $response = Http::get('http://192.168.43.10/unlock');

        if ($response->successful()) {
            return redirect()->back()->with('sukses', 'Loker Terbuka');
            // dd('sukses');
        } else {
            return redirect()->back()->with('gagal', 'Loker Tidak Terbuka');
            // dd('gagal');
        }

    }
}
