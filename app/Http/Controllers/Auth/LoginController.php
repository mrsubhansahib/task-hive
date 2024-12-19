<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //**//**//  ( LOGIN )  //**//**//
    public function createLogin()
    {
        return view('pages.auth.login');
    }

    public function storeLogin(Request $request)
    {
        //---- Validate the request ----//
        $request->validate([
            'email' => 'required|email' ,
            'password' => 'required' ,
        ]);

        //---- Attempt to login the user ----//
        if(Auth::attempt($request->only('email' , 'password'))){
            return redirect()->route('home');
        }else{
            return redirect()->back()->with('error' , 'Inavalid credentails');
        }

    }

    //**//**//  ( USER-LOGIN )  //**//**//
    public function createUserLogin()
    {
        return view('pages.auth.user-login');
    }

    public function storeUserLogin(Request $request)
    {
        //---- Validate the request ----//
        $request->validate([
            'email' => 'required|email' ,
            'password' => 'required' ,
        ]);

        //---- Attempt to login the user ----//
        if(Auth::attempt($request->only('email' , 'password'))){
            return redirect()->route('home');
        }else{
            return redirect()->back()->with('error' , 'Inavalid credentails');
        }

    }



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
