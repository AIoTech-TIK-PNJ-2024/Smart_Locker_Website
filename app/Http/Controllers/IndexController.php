<?php

namespace App\Http\Controllers;

use App\Models\Review;

class IndexController extends Controller
{
    public function index()
    {
        $reviews = Review::orderBy('created_at', 'desc')->take(20)->get();

        return view('landing-page', [
            'title' => 'Landing Page',
            'review' => $reviews,
        ]);
    }

}
