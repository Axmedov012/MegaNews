<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Models\Post;

class CommentController extends Controller
{
    public function index()
    {
        $comment = Comment::all();
        return response()->json($comment);
    }

    public function store(StoreCommentRequest $request, Post $post)
    {
        $request->validated();
        $comment = Comment::create([
            'user_id'=>auth()->id(),
            'post_id'=>2,
            'description'=>$request->description,
        ]);
        return response()->json([
            'data'=>new CommentResource($comment),
            'message'=>'Comment created successfully'
        ]);
    }


    public function show(Comment $comment)
    {
        //
    }

    public function destroy(Comment $comment)
    {
        //
    }
}
