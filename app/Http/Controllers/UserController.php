<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function profile(User $user)
    {
        return view('user.profile', ['user' => $user]);
    }
}
