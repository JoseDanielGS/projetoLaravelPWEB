<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    const _SECRET_HASH_TOKEN = 'my-secret-token-hash';

    public function register(Request $request) 
    {
        $request->validate([
            'name' => "required",
            'email' => "required|unique:users,email",
            'password' => "required",
            'role' =>  "required",
            'cpf' => "required|unique:users,cpf"
        ]);

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "role" => $request->role,
            "role_id" => $request->role_id,
            "cpf" => $request->cpf
        ]);

        $token = $user->createToken(self::_SECRET_HASH_TOKEN)->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response()->json($response, 201);
    }

    public function login(Request $request) 
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            $user = Auth::user();
            $token = [
                'token' => $user->createToken(self::_SECRET_HASH_TOKEN)->plainTextToken
            ];

            return response()->json($token, 200);
        }

        return response()->json('Email ou senha inválidos.', 401);
    }

    public function forgetPassword(Request $request) 
    {
        $request->validate([
            'password' => "required",
            'email' => "required",
            'cpf' => "required"
        ]);

        $user = User::where('email', '=', $request->email)->where('cpf', '=', $request->cpf)->firstOrFail();
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json('', 204);
    }
}
