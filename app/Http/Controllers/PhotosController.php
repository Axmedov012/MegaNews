<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostPhotoRequest;
use App\Http\Resources\PhotoResource;
use App\Models\Photos;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function index()
    {
        $photo = Photos::get();
        return PhotoResource::collection($photo);
    }
    public function store(StorePostPhotoRequest $request)
    {

    }
}
