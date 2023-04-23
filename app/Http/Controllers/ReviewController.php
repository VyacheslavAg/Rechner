<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('review.review', [
            'reviews' => $reviews
        ]);
    }

    public function create(Request $request)
    {
        $valid = $request->validate([
            'authorName' => 'required|min:2',
            'title' => 'required|min:3',
            'description' => 'required|min:3',
        ]);

        $review = new Review();

        $review->authorName = $request->input('authorName');
        $review->title = $request->input('title');
        $review->description = $request->input('description');

        $review->save();

        return back();
    }
}
