<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Laravel\Socialite\Facades\Socialite;

class facebook extends Controller
{
    public function index()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('facebook')->user();

        return "<h2>".$user->getName()."</h2>";
    }
    public function gindex()
    {
        return Socialite::driver('google')->redirect();
    }

    public function gcallback()
    {
        $user = Socialite::driver('google')->user();

        return "<h2>".$user->getName()."</h2>";
    }
}
