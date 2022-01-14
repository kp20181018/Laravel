<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json([
                "error" => "No such user"
            ], 400);
        }
        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                "error" => "Wrong password"
            ], 400);
        }
        return response($user->email)->json([
            "token" => $user->createToken()->plainTextToken
        ]);
    }
    public function register(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            return response()->json([
                "error" => "This email is taken"
            ], 400);
        }
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return response($user->email)->json([
            "token" => $user->createToken()->plainTextToken
        ]);
    }
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
    }
}
