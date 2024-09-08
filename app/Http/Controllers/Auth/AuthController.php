<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $request->validated();
        $user = User::where('user_name', $request->user_name)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response(['user name or password  invalid']);
        }
        return $user->createToken($user)->plainTextToken;
    }
    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        $user->assignRole('user');

        if ($request->hasFile('photos')) {
                 $photoName = $request->file('photos')->getClientOriginalName();
                 $path = $request->file('photos')->store('users/'.$user->id);
                 $user->photos()->create([
                     'name'=>$photoName,
                     'path'=>$path
                 ]);
            }
        $token = $user->createToken($user->first_name)->plainTextToken;
        return response()->json([
            'message' => 'registered successfully',
            'data'=> $user,
            'token' => $token,
        ]);

    }
        public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response('Tokens Revoked');
    }

}
