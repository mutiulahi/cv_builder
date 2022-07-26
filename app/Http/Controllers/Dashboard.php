<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    public function index()
    {
        // return view('dashboard');
        return view('dashboard.dashboard');
    }

    public function user_profile_index()
    {
        return view('dashboard.user_profile');
    }
}
