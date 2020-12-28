<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    public function createUser(Request $request)
    {
        $request->validate([
            'name' => 'required|alpha_dash|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'device_name' => 'required'
        ]);

        // Create a new user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        // Store it
        if ($user->save()) {
            // Generate a new access token
            return response()->json([
                'access_token' => $user->createToken($request->device_name)->plainTextToken
            ]);
        }
    }

    public function createToken(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return response()->json([
            'access_token' => $user->createToken($request->device_name)->plainTextToken
        ]);
    }
}
