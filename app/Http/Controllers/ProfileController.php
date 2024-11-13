<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    public function update(Request $request){
        // $user = User::findOrFail(Auth::user()->id);
        // $request->validate([
        //     'phone'=> 'required|numeric',
        //     'address'=> 'required|string',
        //     'name'=> 'required|string',
        // ]);

        // $user->update([
        //     'phone'=> $request->phone,
        //     'address'=> $request->address,
        //     'name'=> $request->name,
        // ]);

        // Auth::login($user , $remember = true);
        return redirect()->route('profile')->with('success','ویرایش اطلاعات کاربر مهمان قابل ویرایش نیست !');
    }
}
