<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Mail\confirm_Mail;


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

    // update user profile
    public function update_user_profile(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'full_name' => 'required|string|max:255',
            'profile_pic' => 'image|mimes:jpeg,png,jpg',
        ]);

        $unique_id = auth()->user()->unique_id;
        // upload profile picture
        if($request->hasFile('profile_pic')){
            $filename = $unique_id.'_'.$request->profile_pic->getClientOriginalName();
            $request->profile_pic->storeAs('profile_pic',$filename,'public');
           
        // update user profile
        $user = User::where('unique_id', $unique_id)->first();
        $user->name = $request->full_name;
        $user->profile_pic = $filename;
        $user->save();
        if ($user) {
            return redirect()->route('user_profile')->with('success', 'Profile updated successfully.');
        } else {
            return redirect()->route('user_profile')->with('error', 'Something went wrong.');
        }
        }else {
            $user = User::where('unique_id', $unique_id)->first();
            $user->name = $request->full_name;
            $user->save();
            if ($user) {
                return redirect()->route('user_profile')->with('success', 'Profile updated successfully.');
            } else {
                return redirect()->route('user_profile')->with('error', 'Something went wrong.');
            }
        }
    }

    // update user profile password
    public function update_user_profile_password(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
        ]);
        $unique_id = auth()->user()->unique_id;
        $user = User::where('unique_id', $unique_id)->first();
        if (Hash::check($request->old_password, $user->password)) {
            $user->password = bcrypt($request->new_password);
            $user->save();
            if ($user) {
                return redirect()->route('user_profile')->with('success_pass', 'Password updated successfully.');
            } else {
                return redirect()->route('user_profile')->with('error_pass', 'Something went wrong.');
            }
        } else {
            return redirect()->route('user_profile')->with('error_pass', 'Old password is incorrect.');
        }
    }

    // cv edit
    public function cv_edit_index()
    {
        return view('dashboard.cv_edit');
    }
}
