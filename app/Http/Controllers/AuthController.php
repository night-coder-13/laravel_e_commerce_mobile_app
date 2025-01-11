<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginForm(){
        if(Auth::check()){
            return redirect()->route('home');
        }
        $pageTitle = 'ورود';
        return view('auth.login' , compact('pageTitle'));
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5',  
        ]);

        $user = User::where('email', $request->email)->first();
        // dd(Hash::check($request->password, $user->password));

        if (!$user) {
            return redirect()->route('auth.login.form')->withErrors(['email' => 'کاربری با این ایمیل یافت نشد']);
        }

        if(!Hash::check($request->password, $user->password)) {
            return redirect()->route('auth.login.form')->withErrors(['password' => 'پسورد وارد شده اشتباه هست']);
        }

        Auth::login($user, $remember = true);

        return redirect()->route('home')->with('success' , 'ورود باموفقیت انجام شد.');
    }
    public function loginGuest(){
        $user = User::findOrFail(1);
        Auth::login($user , $remember = true);
        return redirect()->route('home')->with('success' , 'ورود باموفقیت انجام شد.');
    }
    public function forgetPassword(){
        $pageTitle = 'بازیابی حساب';
        return view('auth.forgetPassword' , compact('pageTitle'));
    }
    public function register(){
        $pageTitle = 'ایجاد حساب';
        return view('auth.register' , compact('pageTitle'));
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login.form');
    }
}
