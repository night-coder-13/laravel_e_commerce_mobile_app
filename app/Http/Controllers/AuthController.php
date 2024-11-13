<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm(){
        $pageTitle = 'ورود';
        return view('auth.login' , compact('pageTitle'));
    }
    public function loginGuest(){
        $user = User::findOrFail(1);
        Auth::login($user , $remember = true);
        return redirect()->route('home');
    }
}
