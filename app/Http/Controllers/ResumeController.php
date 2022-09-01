<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal_detail;
use App\Models\User;
use App\Models\Education;
use App\Models\Work_experience;
use App\Models\Skill;
use App\Models\Social;
use Barryvdh\DomPDF\Facade\PDF;
// use Barryvdh\DomPDF\Facade as PDF;
// use PDF;
use Illuminate\Support\Facades\Storage;


class ResumeController extends Controller
{
    // cv create index
    public function cv_create_index()
    {
        return view('dashboard.cv_create');
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

    // cv edit index
    public function cv_edit_index()
    {
        $unique_id = auth()->user()->unique_id;
        $personal_detail = Personal_detail::where('user_id', $unique_id)->first();
        $educations = Education::where('user_id', $unique_id)->get();
        $experiences = Work_experience::where('user_id', $unique_id)->get();
        $skills = Skill::where('user_id', $unique_id)->get();
        $socials = Social::where('user_id', $unique_id)->get();

        

        return view('dashboard.cv_edit', compact('personal_detail', 'educations', 'experiences', 'skills', 'socials'));
    }
    // cv edit action (save)
    public function cv_edit_action(Request $detail)
    {
        $unique_id = auth()->user()->unique_id;
    
        // update personal detail
        $personal_detail = Personal_detail::where('user_id', $unique_id)->first();
        $personal_detail->phone = $detail->phone;
        $personal_detail->address = $detail->address;
        $personal_detail->city = $detail->city;
        $personal_detail->state = $detail->state;
        $personal_detail->zip = $detail->zip;
        $personal_detail->nationality = $detail->nationality;
        $personal_detail->bio = $detail->bio;
        $personal_detail->date_of_birth = $detail->date_of_birth;
        $personal_detail->save();

        // update education details
        for ($edu_i_update=0; $edu_i_update < count($detail->school); $edu_i_update++) {

            if (!empty($detail->edu_id[$edu_i_update])) {
                $edu_id =  $detail->edu_id[$edu_i_update];
              }else {
                  $edu_id = '';
              }

            $education = Education::where('user_id', $unique_id)->where('id', $edu_id)->get();
            // dd($education);
            if ($education->count() > 0) {
                // update education details 
                $education = Education::where('user_id', $unique_id)->where('id', $edu_id)->first();
                $education->edu_school = $detail->school[$edu_i_update];
                $education->edu_degree = $detail->school_degree[$edu_i_update];
                $education->edu_address = $detail->school_address[$edu_i_update];
                $education->edu_field_of_study = $detail->school_study[$edu_i_update];
                $education->edu_city = $detail->school_city[$edu_i_update];
                $education->edu_state = $detail->school_state[$edu_i_update];
                $education->edu_zip = $detail->school_zipcode[$edu_i_update];
                $education->edu_school_url = $detail->school_url[$edu_i_update];
                $education->edu_start_date = $detail->edu_from_year[$edu_i_update];
                $education->edu_end_date = $detail->edu_to_yeer[$edu_i_update];
                $education->edu_nationality = $detail->edu_nationality[$edu_i_update];
                $education->save();
            } else {
                $education = new Education();
                $education->user_id = $unique_id;
                $education->edu_school = $detail->school[$edu_i_update];
                $education->edu_degree = $detail->school_degree[$edu_i_update];
                $education->edu_address = $detail->school_address[$edu_i_update];
                $education->edu_field_of_study = $detail->school_study[$edu_i_update];
                $education->edu_city = $detail->school_city[$edu_i_update];
                $education->edu_state = $detail->school_state[$edu_i_update];
                $education->edu_zip = $detail->school_zipcode[$edu_i_update];
                $education->edu_school_url = $detail->school_url[$edu_i_update];
                $education->edu_start_date = $detail->edu_from_year[$edu_i_update];
                $education->edu_end_date = $detail->edu_to_yeer[$edu_i_update];
                $education->edu_nationality = $detail->edu_nationality[$edu_i_update];
                $education->save();
            }
        }

        // update Experiences

        for ($exp_i_update=0; $exp_i_update < count($detail->exp_title); $exp_i_update++) {
            
             if (!empty($detail->exp_id[$exp_i_update])) {
                $exp_id =  $detail->exp_id[$exp_i_update];
              }else {
                  $exp_id = '';
              }
              $experience = Work_experience::where('user_id', $unique_id)->where('id', $exp_id)->get();
            if ($experience->count() > 0) {
                $experience = Work_experience::where('user_id', $unique_id)->where('id', $exp_id)->first();
                $experience->exp_position = $detail->exp_title[$exp_i_update];
                $experience->exp_company = $detail->exp_company[$exp_i_update];
                $experience->exp_city = $detail->exp_city[$exp_i_update];
                $experience->exp_work_nationality = $detail->exp_country[$exp_i_update];
                $experience->exp_start_date = $detail->exp_from_year[$exp_i_update];
                $experience->exp_end_date = $detail->exp_to_year[$exp_i_update];
                $experience->exp_description = $detail->exp_description[$exp_i_update];
                $experience->save();
            }else{
                $experience = new Work_experience();
                $experience->user_id = $unique_id;
                $experience->exp_position = $detail->exp_title[$exp_i_update];
                $experience->exp_company = $detail->exp_company[$exp_i_update];
                $experience->exp_city = $detail->exp_city[$exp_i_update];
                $experience->exp_work_nationality = $detail->exp_country[$exp_i_update];
                $experience->exp_start_date = $detail->exp_from_year[$exp_i_update];
                $experience->exp_end_date = $detail->exp_to_year[$exp_i_update];
                $experience->exp_description = $detail->exp_description[$exp_i_update];
                $experience->save();
            }
        }

        // update skills
        for ($skill_i_update=0; $skill_i_update < count($detail->skill_name); $skill_i_update++) {
            if (!empty($detail->skill_id[$skill_i_update])) {
                $skill_id =  $detail->skill_id[$skill_i_update];
              }else {
                  $skill_id = '';
              }
            $skill = Skill::where('user_id', $unique_id)->where('id', $skill_id)->get();
            if ($skill->count() > 0) {
                $skill = Skill::where('user_id', $unique_id)->where('id', $skill_id)->first();
                $skill->skill = $detail->skill_name[$skill_i_update];
                $skill->save();
            }else{
                $skill = new Skill();
                $skill->user_id = $unique_id;
                $skill->skill = $detail->skill_name[$skill_i_update];
                $skill->save();
            }
        }

        // update languages
        for ($social_i_update=0; $social_i_update < count($detail->social_name) ; $social_i_update++) { 
            // if id is not empty then update else create new
            if (!empty($detail->social_id[$social_i_update])) {
              $social_id =  $detail->social_id[$social_i_update];
            }else {
                $social_id = '';
            }
                
            $social = Social::where('user_id', $unique_id)->where('id', $social_id)->get();
            if ($social->count() > 0) {
                $social = Social::where('user_id', $unique_id)->where('id', $social_id)->first();
                $social->social_name = $detail->social_name[$social_i_update];
                $social->social_link = $detail->social_link[$social_i_update];
                $social->save();
            } else {
            $social = new Social();
            $social->user_id = $unique_id;
            $social->social_name = $detail->social_name[$social_i_update];
            $social->social_link = $detail->social_link[$social_i_update];
            $social->save();
            }
        }
    }

    // delete cv from database
    public function cv_delete_index($item_id, $model)
    {
        $unique_id =  auth()->user()->unique_id;
        if($model == 'Education'){
            $education = Education::where('user_id', $unique_id)->where('id', $item_id)->delete();
            return redirect()->back()->with('success', 'Education deleted successfully');
        }elseif($model == 'Work_experience'){
            $experience = Work_experience::where('user_id', $unique_id)->where('id', $item_id)->delete();
            return redirect()->back()->with('success', 'Experience deleted successfully');
        }elseif($model == 'Skill'){
            $skill = Skill::where('user_id', $unique_id)->where('id', $item_id)->delete();
            return redirect()->back()->with('success', 'Skill deleted successfully');
        }elseif($model == 'Social'){
            $social = Social::where('user_id', $unique_id)->where('id', $item_id)->delete();
            return redirect()->back()->with('success', 'Social deleted successfully');
        }

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

        $logo = base_path('public/img/bg-img/bread.jpg');
        $type = pathinfo($logo, PATHINFO_EXTENSION);
        $data = file_get_contents($logo);
        $pic_logo = 'data:image/' . $type . ';base64,' . base64_encode($data); 

        if(auth()->user()->profile_pic == null){
            $profile_pic_image = '1.jpg';
        }else{
            $profile_pic_image = auth()->user()->profile_pic;
        }
        $profile = base_path('public/profile_pics/'.$profile_pic_image);
        $type_profile = pathinfo($profile, PATHINFO_EXTENSION);
        $data_profile = file_get_contents($profile);
        $pic_profile = 'data:image/' . $type_profile . ';base64,' . base64_encode($data_profile); 


        $pdf = PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true]);        
        $pdf->loadView('template.template_1', compact('personal_detail', 'educations', 'experiences', 'skills', 'socials', 'pic_logo', 'pic_profile'))->setOptions(['defaultFont' => 'palatino']);
        
        return $pdf->stream();
    }

    
}
