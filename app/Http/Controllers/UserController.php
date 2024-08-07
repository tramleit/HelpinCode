<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function dashboard()
    {
        return view("dashboard");
    }
    public function profile()
    {
        return view("profile");
    }

    public function threads(User $user)
    {
        return view("user-thread",[
            'user' => $user,
            'userId' => $user->id
        ]);
    }
}
