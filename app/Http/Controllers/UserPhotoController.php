<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostPhotoRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class UserPhotoController extends Controller
{
    public function store(StorePostPhotoRequest $request , User $user):Response
    {
        if (empty($user->photos())) {
            $photo = $request->photos;
            $name = $photo->getClientOriginalName();
            $path = $photo->store('users/'. $user->id, 'public');
            $user->photos()->create([
                'name' => $name,
                'path' => $path
            ]);
            return response('success', Response::HTTP_CREATED);
        }
        if (!empty($user->photos())){
                Storage::delete($user->photos()->first()->path);
                $user->photos()->delete();
            $photo = $request->photos;
            $name = $photo->getClientOriginalName();
            $path = $photo->store('users/'. $user->id, 'public');
            $user->photos()->create([
                'name' => $name,
                'path' => $path
            ]);
            return response('success', Response::HTTP_CREATED);
        }
        return response('error', Response::HTTP_BAD_REQUEST);
    }

}
