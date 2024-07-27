<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('authentification.login');
    }

    public function submit()
    {
        dd("e");
        return 'Login submit';
    }
}
