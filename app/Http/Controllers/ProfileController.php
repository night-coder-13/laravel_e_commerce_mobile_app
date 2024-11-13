<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        $pageTitle = 'پروفایل';
        return view('profile.index', compact('pageTitle' , 'user'));
    }
    public function edit(){
        $user = Auth::user();
        $pageTitle = 'پروفایل';
        return view('profile.edit', compact('pageTitle' , 'user'));
    }
}
