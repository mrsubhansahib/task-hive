<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //**//**//  ( CREATE ACCOUNT )  //**//**//
    public function create()
    {
        return view('pages.auth.create');
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
            'image'=>'profile_image.jpg'
        ]);

        //---- Check if the user was created ----//
        if ($user) {
            return redirect()->back()->with('success' , 'Registration successful');
        } else {
            return redirect()->back()->with('error' , 'Registration failed');
        }
    }

    //**//**//  ( LOGOUT )  //**//**//
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    //**//**// ( USER-FORM) //**//**//
    public function read()
    {
        $users = User::all();
        return view('pages.admin.read', compact('users'));

    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.admin.update', compact('user'));
    }
    /*public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:6',
            'username' => 'required|min:6|unique:users,username,' . $id,
            'job_title' => 'required',
            'role' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect('/user-form')->with('success', 'User updated successfully.');
    }*/

    //**//**// ( USER-DELETE ) //**//**//
    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/user-form')->with('success', 'User deleted successfully.');
    }
}


