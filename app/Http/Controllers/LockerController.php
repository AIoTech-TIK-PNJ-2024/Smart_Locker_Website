<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Illuminate\Support\Facades\Storage;

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

    public function barcodeGenerator()
    {
        /* MEMBUAT QRCODE MENGGUNAKAN LIBRARY DARI
        composer require endroid/qr-code
         */

        // mengecek kesamaan kode_barcode pada database
        do {
            $uniqueNumber = mt_rand(1000000, 9999999);
        } while (Pengguna::where('kode_barcode', $uniqueNumber)->exists());

        // membuat qrcode dari angka acak dan menyimpan di storage
        $qrCode = new QrCode($uniqueNumber);
        $writer = new PngWriter();
        $result = $writer->write($qrCode);

        $fileName = $uniqueNumber . '.png';
        $filePath = 'qrcodes/' . $fileName;
        Storage::put($filePath, $result->getString());

        return $uniqueNumber;
    }
}
