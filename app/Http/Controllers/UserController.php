<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $user = UserResource::collection(User::all());
        return response()->json($user);
    }
    public function show(User $user)
    {

       return USerResource::make($user);
    }
    public function store()
    {

    }
   public function destroy(User $user)
    {
        if (!empty($user->photos())){
        Storage::delete($user->photos()->pluck('path')->toArray()); // file o'chirish
        $user->photos()->delete();
    }
        $user->delete();
        return response('success', 200);
    }
}
