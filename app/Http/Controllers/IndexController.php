<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $reviews = Review::orderBy('created_at', 'desc')->take(3)->get();

        return view('landing-page', [
            'title' => 'Landing Page',
            'review' => $reviews,
        ]);
    }

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
        $validatedData['sentimen'] = 'Positive'; // masih statis pake nilai positif

        Review::create($validatedData);

        return redirect('/')->with('success', "Terimakasih sudah memberikan ulasan");

    }
}
