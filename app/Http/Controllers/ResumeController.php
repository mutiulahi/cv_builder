<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal_detail;
use App\Models\User;
use App\Models\Education;
use App\Models\Work_experience;
use App\Models\Skill;
use App\Models\Social;
use Barryvdh\DomPDF\Facade\Pdf;

class ResumeController extends Controller
{
    // cv create
    public function cv_create_index()
    {
        return view('dashboard.cv_edit');
    }

    // cv create action (save)
    public function cv_create_action(Request $detail)
    {
        $unique_id = auth()->user()->unique_id;
        $personal_detail = new Personal_detail();
        $personal_detail->user_id = $unique_id;
        $personal_detail->phone = $detail->phone;
        $personal_detail->address = $detail->address;
        $personal_detail->city = $detail->city;
        $personal_detail->state = $detail->state;
        $personal_detail->zip = $detail->zip;
        $personal_detail->nationality = $detail->nationality;
        $personal_detail->bio = $detail->bio;
        $personal_detail->date_of_birth = $detail->date_of_birth;
        // $personal_detail->save();
        if ($personal_detail->save()) {
            // save multiple of educations 
            for ($i=0; $i < count($detail->school); $i++) { 
                $education = new Education();
                $education->user_id = $unique_id;
                $education->edu_school = $detail->school[$i];
                $education->edu_degree = $detail->school_degree[$i];
                $education->edu_address = $detail->school_address[$i];
                $education->edu_field_of_study = $detail->school_study[$i];
                $education->edu_city = $detail->school_city[$i];
                $education->edu_state = $detail->school_state[$i];
                $education->edu_zip = $detail->school_zipcode[$i];
                $education->edu_school_url = $detail->school_url[$i];
                $education->edu_start_date = $detail->edu_from_year[$i];
                $education->edu_end_date = $detail->edu_to_yeer[$i];
                $education->edu_nationality = $detail->edu_nationality[$i];
                $education->save();
            }
           
            for ($exp_i=0; $exp_i < count($detail->exp_title) ; $exp_i++) { 
                $experience = new Work_experience();
                $experience->user_id = $unique_id;
                $experience->exp_position = $detail->exp_title[$exp_i];
                $experience->exp_company = $detail->exp_company[$exp_i];
                $experience->exp_city = $detail->exp_city[$exp_i];
                $experience->exp_work_nationality = $detail->exp_country[$exp_i];
                $experience->exp_start_date = $detail->exp_from_year[$exp_i];
                $experience->exp_end_date = $detail->exp_to_year[$exp_i];
                $experience->exp_description = $detail->exp_description[$exp_i];
                $experience->save();
            }

            for ($skill_i=0; $skill_i < count($detail->skill_name); $skill_i++) { 
                $skils = new Skill();
                $skils->user_id = $unique_id;
                $skils->skill = $detail->skill_name[$skill_i];
                $skils->save();
            }

            for ($social_i=0; $social_i < count($detail->social_name) ; $social_i++) { 
                $social = new Social();
                $social->user_id = $unique_id;
                $social->social_name = $detail->social_name[$social_i];
                $social->social_link = $detail->social_link[$social_i];
                $social->save();
            }
        }
        return redirect()->route('resume_cv')->with('success', 'Resume Created Successfully');
    }

    // cv template 1
    public function cv_template_1()
    {
        $unique_id = auth()->user()->unique_id;
        $personal_detail = Personal_detail::where('user_id', $unique_id)->first();
        $educations = Education::where('user_id', $unique_id)->get();
        $experiences = Work_experience::where('user_id', $unique_id)->get();
        $skills = Skill::where('user_id', $unique_id)->get();
        $socials = Social::where('user_id', $unique_id)->get();
        // return view('template.template_1', compact('personal_detail', 'educations', 'experiences', 'skills', 'socials'));
        
        $pdf = Pdf::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true, 'image'=> true]);
        
        $pdf = Pdf::loadView('template.template_1', compact('personal_detail', 'educations', 'experiences', 'skills', 'socials'))->setOptions(['defaultFont' => 'palatino']);
        
        return $pdf->stream();
    }
    
}