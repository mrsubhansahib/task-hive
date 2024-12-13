<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(): View
    {
        return view('pages.auth.new-account');
    }

    //**//**// Register //**//**//
    /*public function store(Request $request)
    {
        //---- Validate the reuest ----//
        $request->validate ([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6' ,
        ]);

        //---- Create database ----//
        $user = User::create([
           'name' =>$request->name ,
            'email' =>$request->email ,
            'password' =>Hash::make($request->password) ,
        ]);

        //---- Check user created ----//
        if($user){
            return redirect('/login');
        }else{
            return redirect()->back()->with('error' , 'Registration failed');
        }
    }*/
}
