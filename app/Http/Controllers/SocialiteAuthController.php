<?php

namespace App\Http\Controllers;

use App\Enums\Provider;
use Exception;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteAuthController extends Controller
{
    function redirect (Provider $provider) {
        return Socialite::driver($provider->value)->redirect();
    }

    function authenticate (Provider $provider) {
        try {
            $socialiteUser = Socialite::driver($provider->value)->user();
            dd($socialiteUser);
        }catch (\Exception $e) {
            throw new Exception($e);
        }
    }

}
