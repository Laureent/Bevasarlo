<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    /*
        Regisztrációt feldolgozó function.
        A $request kérésben kapja meg a szükséges adatokat.
    */
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt('password'),
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }
    /*
        A bejelentkezést feldolgozó function.
        A $request kérésben kapja meg a szükséges adatokat.
    */
    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $fields['email'])->first();
        if(!$user || !Hash::check($fields['password'],$user->password)){
            return response([
                'message' => "Sikertelen bejelentkezés",
            ],401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    /*
    A kijelentkezést feldolgozó function.
    A $request kérésben kapja meg a szükséges adatokat.
    */
    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => "Sikeres kijelentkezés.",
        ];
    }
}
