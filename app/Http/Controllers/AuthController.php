<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //**//**//  ( REGISTRATION )  //**//**//
    public function create()
    {
        return view('pages.auth.register');
    }

    public function store(Request $request)
    {
        //---- Validate the request ----//
        $request->validate([
            'name' => 'required|min:6',
            'username' => 'required|min:6',
            'email' => 'required|email|unique:users,email',
            'job_title' => 'required',
            'password' => 'required|min:6',
        ]);

        //---- Create database entry ----//
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'job_title' => $request->job_title,
            'password' => Hash::make($request->password),
            'image'=>'profile_image.jpg',
        ]);

        //---- Check if the user was created ----//
        if ($user) {
            return redirect('/login')->with('success' , 'Registration successful');
        } else {
            return redirect()->back()->with('error' , 'Registration failed');
        }
    }

    //**//**//  ( LOGIN )  //**//**//
    public function createUser()
    {
        return view('pages.auth.login');
    }

    public function storeUser(Request $request)
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
}
