<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SocialiteAuthController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login-view', [LoginController::class, 'loginView'])->name('login-view');
Route::post('login-submit', [LoginController::class, 'loginSubmit'])->name('login-submit');

/* Route::get('sign-in/github', [LoginController::class, 'github']);
Route::get('sign-in/github/redirect', [LoginController::class, 'githubRedirect']); */


/* Route::controller(controller : SocialiteAuthController::class)->group(function () {
    Route::get(uri : 'oauth/{provider}/redirect', action : 'redirect')->name('oauth.redirect');
    Route::get(uri : 'oauth/{provider}/callback', action : 'authenticate');
}); */

Route::get('oauth/{provider}/redirect', [SocialiteAuthController::class, 'redirect'])->name('oauth.redirect');
Route::get('oauth/{provider}/callback', [SocialiteAuthController::class, 'authenticate']);
