<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //**//**//  ( REGISTRATION )  //**//**//
    public function createRegister()
    {
        return view('pages.auth.register');
    }

    public function storeRegister(Request $request)
    {
        //---- Validate the request ----//
        $request->validate([
            'name' => 'required|min:6',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        //---- Create database entry ----//
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image'=>'profile_image.jpg'
        ]);

        //---- Check if the user was created ----//
        if ($user) {
            return redirect('/login')->with('success' , 'Registration successful');
        } else {
            return redirect()->back()->with('error' , 'Registration failed');
        }
    }

    //**//**//  ( NEW-ACCOUNT )  //**//**//
    public function createAccount()
    {
        return view('pages.auth.new-account');
    }

    public function storeAccount(Request $request)
    {
        //---- Validate the request ----//
        $request->validate([
            'name' => 'required|min:6',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);
        //---- Create database entry ----//
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image'=>'profile_image.jpg'
        ]);

        //---- Check if the user was created ----//
        if ($user) {
            return redirect('/user-login')->with('success' , 'Registration successful');
        } else {
            return redirect()->back()->with('error' , 'Registration failed');
        }
    }
}

