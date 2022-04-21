<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Validation\ValidationException;
use Illuminate\support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request) {
        $request->validate([
            'email' => ['required,', 'email'],
            'password' => ['required']
        ]);

        if( Auth::attempt($request->only('email', 'password')) ) {
            return response()->json(Auth::user(), 200);
        }
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect']
        ]);
    }
}
