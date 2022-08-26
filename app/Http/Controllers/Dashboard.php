<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Personal_detail;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Hash;
use App\Mail\confirm_Mail;


class Dashboard extends Controller
{
    // dashboard index
    public function index()
    {
        // return view('dashboard');
        $user_id = Auth::user()->unique_id;
        $personal_detail = Personal_detail::where('user_id', $user_id)->first();
        return view('dashboard.dashboard', compact('personal_detail'));
    }

    public function resume_cv()
    {
        // return view('dashboard');
        $user_id = Auth::user()->unique_id;
        $personal_detail = Personal_detail::where('user_id', $user_id)->first();
        return view('dashboard.resume_cv', compact('personal_detail'));
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

    // job application
    public function job_application_index(Request $request)
    {
        $user_id = Auth::user()->unique_id;
        $job_applications = JobApplication::where('user_id', $user_id)->get();
        // dd($job_applications);
        return view('dashboard.job_application', compact('job_applications'));
    }
    // job application store
    public function job_application_store(Request $request)
    {
        $this->validate($request, [
            'job_title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'working_type' => 'required|string|max:255',
            'willing_to_move' => 'required|string|max:255',
            'salary' => 'required|numeric|max:255',
        ]); 
        $user_id = Auth::user()->unique_id;
        // find job application by user id 
        $job_application = JobApplication::where('user_id', $user_id)->first();
        // if job application is not found then create new job application
        if (!$job_application) {
            $job_application = new JobApplication();
            $job_application->user_id = $user_id;
            $job_application->job_title = $request->job_title;
            $job_application->location = $request->location;
            $job_application->working_type = $request->working_type;
            $job_application->willing_to_move = $request->willing_to_move;
            $job_application->salary = $request->salary;
            $job_application->save();
            if ($job_application) {
                return redirect()->route('job_application')->with('success', 'Job application submitted successfully.');
            } else {
                return redirect()->route('job_application')->with('error', 'Something went wrong.');
            }
        } else {
            //if job application is found then update job application
            $job_application = JobApplication::where('user_id', $user_id)->first();
            $job_application->job_title = $request->job_title;
            $job_application->location = $request->location;
            $job_application->working_type = $request->working_type;
            $job_application->willing_to_move = $request->willing_to_move;
            $job_application->salary = $request->salary;
            $job_application->save();
            if ($job_application) {
                return redirect()->route('job_application')->with('success', 'Job application submitted successfully.');
            } else {
                return redirect()->route('job_application')->with('error', 'Something went wrong.');
            }
        }
    }

    
}
