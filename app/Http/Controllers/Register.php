<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\confirm_Mail;

class Register extends Controller
{
    // route to register page
    public function index()
    {
        return view('auth.register');
    }

    // register action
    public function register_action(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        if ($user) {
            Mail::to($user->email)->send(new confirm_Mail($user));
            return redirect()->route('login')->with('success', 'Please check your email to confirm your account.');
        } else {
            return redirect()->route('register')->with('error', 'Something went wrong.');
        }
    }
}
