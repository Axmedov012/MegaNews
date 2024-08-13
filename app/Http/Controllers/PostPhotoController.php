<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostPhotoRequest;
use App\Models\Photos;
use App\Models\Post;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class PostPhotoController extends Controller
{
    public function index(Post $post)
    {
        return  $post->photos;
    }

    public function store(StorePostPhotoRequest $request , Post $post):Response
    {
        foreach ($request->photos as $photo) {
            $name = $photo->getClientOriginalName();
            $path = $photo->store('post/'.$post->id,'public');
            $post->photos()->create([
                'name' => $name,
                'path' => $path
            ]);
            return  response('success', Response::HTTP_CREATED);
        }
        return  response('error', Response::HTTP_BAD_REQUEST);
    }

    public function destroy(Post $post, Photos $photo)
    {
         Storage::delete($photo->path);
         $photo->delete();
        return response('success', 200);
    }
}
