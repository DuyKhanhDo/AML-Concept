<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function ReviewView()
    {
        $reviews = Review::where('media_id',$media->id)
        ->inRandomOrder()
        ->take(5)
        ->get();

        return view('media',compact('media','borrowedBefore','reviews'));

        return view('review');
    }
}
