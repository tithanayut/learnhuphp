<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {
    public function register(RegisterRequest $request) {
        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->username . '@learnhub.local',
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function login(LoginRequest $request) {
        $user = User::where('username', $request->username)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->exceptInput('password', 'confirm-password')->with([
                'toast' => 'Username or password is invalid',
            ]);
        }

        Auth::login($user);

        return redirect()->route('home');
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('home');
    }
}
