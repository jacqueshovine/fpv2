<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('authentication.login');
    }

    public function submit(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required', 'min:2'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            // Prevent session fixation attacks
            $request->session()->regenerate();
 
            return redirect()->intended('user.profile');
        }
 
        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ])->onlyInput('name');
    }
}
