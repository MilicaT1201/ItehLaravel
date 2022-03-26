<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Error!', $validator->errors()]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('MilicaTokenReg')->plainTextToken;

        $odgovor = [
            'User: ' => $user,
            'Token: ' => $token,
        ];

        return response()->json($odgovor);
    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Error!', $validator->errors()]);
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['Error: ' => 'Please try again!']);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('MilicaTokenLogin')->plainTextToken;

        $odgovor = [
            'User: ' => $user,
            'Token: ' => $token,
        ];

        return response()->json($odgovor);
    }


    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json('Logout successful!');
    }
}
