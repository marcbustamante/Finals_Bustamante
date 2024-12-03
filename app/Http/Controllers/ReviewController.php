<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request, $movie_id)
    {
        $request->validate([
            'review' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $review = new Review();
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->movie_id = $movie_id;
        $review->user_id = Auth::id();
        $review->save();

        return redirect()->route('movies.show', $movie_id);
    }
}