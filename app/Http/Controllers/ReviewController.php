<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function review(Request $request)
    {
        $validatedData = $request->validate([
            'review' => 'required|max:130',
        ]);

        if ($request['nama'] == '') {
            $validatedData['nama'] = 'anonymous';
        } else {
            $validatedData['nama'] = $request['nama'];
        }
        $validatedData['sentimen'] = $this->sentiment($request['review']);

        if ($validatedData['sentimen'] == 'Unknown') {
            return redirect('/')->with('info', 'Maaf, terjadi masalah pada API');
        }

        Review::create($validatedData);

        return redirect('/')->with('info', "Terimakasih sudah memberikan ulasan");
    }

    public function sentiment($review)
    {
        // inisialisasi curl untuk menangani request
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://aiotech-pnj.koyeb.app/predict_sentiment');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['review' => $review])); // object json di sesuaikan dengan input API
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);

        // curl mengeksekusi request untuk mendapatkan sentimen
        $response = curl_exec($ch);

        // Cek errors
        if (curl_errno($ch)) {
            // Handle error, jika terdapat error pada saat eksekusi
            return 'Unknown';
        }

        // menutup request curl
        curl_close($ch);

        // men decode respon dari json
        $result = json_decode($response, true);

        // mengembalikan hasil sentiment dari API
        return $result['sentiment'] ?? 'Unknown';
    }
}
