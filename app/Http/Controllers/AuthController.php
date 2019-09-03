<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    protected function generateAccessToken($user) {
        $token = $user->createToken($user->email.'_'.now());

        return $token->accessToken;
    }
    
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password)
        ]);

        return response()->json($user, 200);
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();

            $token = $user->createToken($user->email.'_'.now());

            return response()->json([
                'token' => $token->accessToken
            ], 200);

        }
    }

}
