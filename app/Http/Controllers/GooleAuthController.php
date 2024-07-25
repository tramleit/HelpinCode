<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GooleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
            
            $this->registerOrLoginUser($user);

            return redirect()->intended('dashboard');
        } catch (\Throwable $th) {

            abort(401);
        }
    }
    protected function registerOrLoginUser($user)
    {
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            Auth::login($existingUser);
        } else {
            $newUser = new User();
            $username = '@' . str_replace(' ', '_', $user->name);
            if (User::where('username', $user->username)->count()) {
                $username = $user->username . '_' . rand(50, 500);
            }
            $newUser->name = $user->name;
            $newUser->username = strtolower($username);
            $newUser->email = $user->email;
            $newUser->email_verified_at = \Carbon\Carbon::now()->timestamp;
            $newUser->image = $user->avatar;
            $newUser->google_id = $user->id;
            $newUser->save();

            Auth::login($newUser);
        }
    }
}
