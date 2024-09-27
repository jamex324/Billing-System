<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginControllers extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        // If using token-based auth, generate and return a token here
        return response()->json([
            'success' => true,
            'message' => 'Login successful',
            'credentials' => $credentials
            // You can return a token or user info here if needed
        ], 200);
    }

    return response()->json([
        'success' => false,
        'message' => 'The provided credentials do not match our records.'
    ], 401);
}


}
    

