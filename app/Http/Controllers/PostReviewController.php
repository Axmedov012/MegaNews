<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Review;
use Illuminate\Http\Request;

class PostReviewController extends Controller
{

    public function index(Post $post)
    {
        return response([
            'overall_rating'=>$post->reviews()->avg('rating'),
            'reviews_count'=>$post->reviews()->count(),
            'reviews'=>$post->reviews()->paginate(10)
        ]);
    }

    public function store(Post $post, Request $request)
    {
        $request->validate([
            'rating' => 'required',
            'body'=>'nullable|max:100',
        ]);

       $review = $post->reviews()->create([
            'user_id' => auth()->id(),
            'rating'=>$request->rating,
            'body'=> $request->body,
        ]);

        return response()->json([
            'data'=>$review,
        ]);
    }
}
