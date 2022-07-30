<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\confirm_Mail;


class Login extends Controller
{
    // route to login page
    public function index()
    {
        // if user is already logged in, redirect to dashboard
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
        return view('auth.login');
        }
    }

    // route to login action
    public function login_action(Request $request)
    {
        // $this->validate($request, [
        //     'email' => 'required|email',
        //     'password' => 'required|min:6'
        // ]);
        $email = $request->email;
        $password = $request->password;

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)){

            $request->session()->regenerate();
            return redirect()->intended('dashboard');          

        }else{
            return back()->with('error', 'The provided credentials do not match our records.');
        }

    }

}
