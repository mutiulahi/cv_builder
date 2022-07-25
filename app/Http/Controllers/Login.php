<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    // route to login page
    public function index()
    {
        return view('auth.login');
    }

}
