<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //**//**//  ( VIEW PROFILE )  //**//**//
    public function view()
    {
        $user = Auth::user();
        return view('pages.auth.profile.view-profile', compact('user'));
    }

    //**//**//  ( EDIT PROFILE )  //**//**//
    public function edit()
    {
        $user = Auth::user();
        return view('pages.auth.profile.edit-profile', compact('user'));
    }

    //**//**//  ( UPDATE PROFILE )  //**//**//
    public function update(Request $request)
    {
        //---- Validate the request ----//
        $request->validate([
            'name' => 'required|min:6',
            'username' => 'required|min:6',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'job_title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' ,
        ]);

        //---- Handle upload images ----//
        if ($request->hasFile('image')) {
            $imageName = \Str::uuid() . '.' . $request->image->getClientOriginalExtension();
            // dd($imageName);
            $request->image->move(public_path('uploads/profile'), $imageName);
            $request->image = $imageName;
        }

        //---- Check if the profile was updated ----//
        $user = Auth::user();

        $user->update(['name'=>$request->name, 'username'=>$request->username  , 'email'=>$request->email ,
                        'job_title'=>$request->job_title , 'image'=>$request->image]);

        return redirect()->route('profile.view')->with('success', 'Profile updated successfully.');
    }

    //**//**//  ( CHANGE PASSWORD )  //**//**//
    public function changePassword()
    {
        $user = Auth::user();
        return view('pages.auth.profile.change-password', compact('user'));
    }

    public function confirmPassword(Request $request)
    {
        //---- Validate the request ----//
        $request->validate([
           'current_password' => 'required',
           'new_password' => 'required|min:6|confirmed',
        ]);
        $user = Auth::user();

        //---- Check if the current password is correct ----//
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        //---- Update the password ----//
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password changed successfully.');
    }
}


