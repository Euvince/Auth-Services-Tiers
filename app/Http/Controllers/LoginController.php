<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    function loginView () : View {
        return view('login_user');
    }

    function loginSubmit () {

    }

    function github () {
        // Send the user's request to github
        return Socialite::driver('github')->redirect();
    }

    function githubRedirect () {
        // Get OAuth request back from github to authenticate user
        $user = Socialite::driver('github')->user();
        /* dd($user); */
        $user = User::firstOrCreate([
            'email' => $user->email
        ], [
            'name' => $user->name,
            'password' => Hash::make(Str::random(24))
        ]);
        return "Successully";
    }

}
