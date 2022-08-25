<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Create CV</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

</head>

<body class="ali-bg">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>


    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="cv-download">
                        <div class="row align-items-center">
                            
                            <div class="col-lg-6 col-md-12">
                                <p class="topnote">Fill all required fields and click create cv to download CV in both PDF formart</p>
                                
                            </div>
                            <div class="col-lg-6 col-md-12 mt-s">
                                {{-- <a href="{{route('dashboard')}}" class="btn btn-soft-primary ms-2"> <i class="fa fa-arrow-left"></i> Return to home</a> --}}
                                <a href="{{route('dashboard')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Return to home</a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="container">

                        <form method="post" action="{{route('edit_cv')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="mt-150">
                                <h2>Personal Info</h2>
                                <div class="block-container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-2 col-md-4">
                                            <img src="{{asset('/storage/profile_pic/'.Auth::user()->profile_pic)}}" class="d-block" alt="">
                                        </div>
                                        <div class="col-lg-5 col-md-8 mt-s">
                                            <h6 class="">Profile Picture</h6>
                                            <p class="text-muted mb-0">You can the change profile by changing the account profile picture. </p>
                                        </div>
                                        {{-- <div class="col-lg-5 col-md-12 mt-s">
                                            <a href="#" class="btn btn-primary">Upload</a>
                                            <a href="#" class="btn btn-soft-primary ms-2">Remove</a>
                                        </div> --}}
                                    </div>
                                    <div class="mt-30">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label style="margin-bottom: 7px;">Full Name:</label>
                                                <input type="text" name="full_name" class="control-form-me" value="{{auth()->user()->name}}" readonly >
                                            </div>
                                            
                                            <div class="col-lg-6">
                                                <label style="margin-bottom: 7px;">Date of Birth:</label>
                                                <input type="date" name="date_of_birth" class="control-form-me" value="{{$personal_detail->date_of_birth}}" placeholder="">
                                            </div>
                                            <div class="col-lg-6">
                                                <label style="margin-bottom: 7px;">Your Address:</label>
                                                <input type="text" name="address" class="control-form-me" value="{{$personal_detail->address}}" placeholder="enter your address">
                                            </div>
                                            <div class="col-lg-6">
                                                <label style="margin-bottom: 7px;">Your Email:</label>
                                                <input type="text" name="email" class="control-form-me" value="{{auth()->user()->email}}" readonly placeholder="enter your name">
                                            </div>
                                            <div class="col-lg-6">
                                                <label style="margin-bottom: 7px;">City:</label>
                                                <input type="text" name="city" value="{{$personal_detail->city}}" class="control-form-me" placeholder="enter your city">
                                            </div>
                                            
                                            <div class="col-lg-6">
                                                <label style="margin-bottom: 7px;">State:</label>
                                                <input type="text" name="state" value="{{$personal_detail->state}}" class="control-form-me" placeholder="enter your state">
                                            </div>
                                            <div class="col-lg-6">
                                                <label style="margin-bottom: 7px;">Nationality:</label>
                                                <input type="text" name="nationality" value="{{$personal_detail->nationality}}" class="control-form-me" placeholder="enter your nationality">
                                            </div>
                                            
                                            <div class="col-lg-6">
                                                <label style="margin-bottom: 7px;">Phone No:</label>
                                                <input type="text" name="phone" value="{{$personal_detail->phone}}" class="control-form-me" placeholder="Ex: phone number">
                                            </div>
                                            <div class="col-lg-12">
                                                <label style="margin-bottom: 7px;">Your Bio Here</label>
                                                <textarea name="bio" id="comments" rows="4" value="{{$personal_detail->bio}}" class="control-form-me" placeholder="About Me :">{{$personal_detail->bio}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group add-edu">
                                <h2>Add Educations</h2>
                                
                                <div class="all-edus">
                                    {{-- if education is empty --}}
                                    @if(count($educations) == 0)
                                        <span id="show_edu" style="text-align: center;">no education detail available</span>
                                    @else
                                        @foreach ($educations as $education) 
                                            <div class="new-edu">
                                                <div class="row">
                                                    <div class="add-border"><h2>New Education</h2><span></span></div> <div class="del-btn"> <div class="btn btn-sm btn-danger btn-me" id="remove-edu"> <i class="fa fa-trash"></i> </div></div>
                                                    <input type="hidden" name="edu_id[]" value="{{$education->id}}">
                                                    <div class="col-lg-6">
                                                        <label style="margin-bottom: 7px;">Field of study:</label>
                                                        <input type="text" name="school_study[]" class="control-form-me" value="{{$education->edu_field_of_study}}" placeholder="Ex: Computer Science">
                                                    </div>
                                                    <div class="col-lg-6">   
                                                        <label style="margin-bottom: 7px;">Degree:</label>
                                                        <input type="text" name="school_degree[]" class="control-form-me" value="{{$education->edu_degree}}" placeholder="Ex: Bachelor\'s">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label style="margin-bottom: 7px;">School:</label>
                                                        <input type="text" name="school[]" class="control-form-me" value="{{$education->edu_school}}" placeholder="Ex: al-albayt university">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label style="margin-bottom: 7px;">Address:</label>
                                                        <input type="text" name="school_address[]" class="control-form-me" value="{{$education->edu_address}}" placeholder="Ex: no 2, albayt ">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label style="margin-bottom: 7px;">City:</label>
                                                        <input type="text" name="school_city[]" placeholder="Ex: Iwo" value="{{$education->edu_city}}" class="control-form-me">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label style="margin-bottom: 7px;">State:</label>
                                                        <input type="text" name="school_state[]" placeholder="Ex: Osun" value="{{$education->edu_state}}" class="control-form-me">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label style="margin-bottom: 7px;">School Url:</label>
                                                        <input type="text" name="school_url[]" placeholder="Ex: www.europain.com" value="{{$education->edu_school_url}}" class="control-form-me">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label style="margin-bottom: 7px;">School Zip Code:</label>
                                                        <input type="text" name="school_zipcode[]" placeholder="Ex: 121223" value="{{$education->edu_zip}}" class="control-form-me">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label style="margin-bottom: 7px;">From year:</label>
                                                        <input type="date" name="edu_from_year[]" placeholder="Ex: 121223" value="{{$education->edu_start_date}}" class="control-form-me">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label style="margin-bottom: 7px;">To year (today's date =present):</label>
                                                        <input type="date" name="edu_to_yeer[]" placeholder="Ex: 121223" value="{{$education->edu_end_date}}" class="control-form-me">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label style="margin-bottom: 7px;">Nationality:</label>
                                                        <input type="text" name="edu_nationality[]" class="control-form-me" value="{{$education->edu_nationality}}" placeholder="Nationality">
                                                    </div>
                                                </div>                                
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="add-blk btn btn-info" id="add-edu"> 
                                    <i class="fa fa-plus"></i>
                                    <span>Add Education</span>
                                </div>
                                
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group add-exp mt-s">
                                <h2>Add Experiences</h2>
                                <div class="all-exps">
                                    @if(count($experiences) == 0)
                                        <span id="show_exp" style="text-align: center;">no experience details available</span>
                                    @else
                                        @foreach ($experiences as $experience)
                                            <div class="new-exp">
                                                <input type="hidden" name="exp_id[]" value="{{$experience->id}}">
                                                <div class="row">
                                                    <div class="add-border"><h2>New Experience</h2><span></span></div> <div class="del-btn"> <div class="btn btn-sm btn-danger btn-me" id="remove-exp"> <i class="fa fa-trash"></i> </div></div>
                                                    <div class="col-lg-6">
                                                        <label style="margin-bottom: 7px;">Title:</label>
                                                        <input type="text" name="exp_title[]" class="control-form-me" value="{{$experience->exp_position}}" placeholder="Ex: Web Developer">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label style="margin-bottom: 7px;">Company:</label>
                                                        <input type="text" name="exp_company[]" class="control-form-me" value="{{$experience->exp_company}}" placeholder="Ex: ProgressSoft">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label style="margin-bottom: 7px;">City:</label>
                                                        <input type="text" name="exp_city[]" class="control-form-me" value="{{$experience->exp_city}}" placeholder="Ex: Osogbo">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label style="margin-bottom: 7px;">Country:</label>
                                                        <input type="text" name="exp_country[]" class="control-form-me" value="{{$experience->exp_work_nationality}}" placeholder="Ex: Nigeria">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label style="margin-bottom: 7px;">From year:</label>
                                                        <input type="month" name="exp_from_year[]" value="{{$experience->exp_start_date}}" class="control-form-me">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label style="margin-bottom: 7px;">To year (optional=present):</label>
                                                        <input type="month" name="exp_to_year[]" value="{{$experience->exp_end_date}}" class="control-form-me">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label style="margin-bottom: 7px;">Description (optional):</label>
                                                        <textarea name="exp_description[]"  class="control-form-me">{{$experience->exp_description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="add-blk btn btn-info" id="add-exp">
                                    <i class="fa fa-plus"></i>
                                    <span>Add Experience</span>
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <div class="form-group add-skill mt-s">
                                <h2>Add Skills</h2>
                                <div class="block-container">
                                    @if (count($skills) == 0)
                                        <span id="show_skill" style="text-align: center;">no skills details available</span>
                                    @else
                                       <div class="all-skills">
                                            @foreach ($skills as $skill)
                                                <div class="new-skills">
                                                    <div class="row">
                                                            <div class="add-border"><h2>New Skill</h2><span></span></div> <div class="del-btn"> <div class="btn btn-sm btn-danger btn-me" id="remove-skill"> <i class="fa fa-trash"></i> </div></div>
                                                            <div class="col-lg-12">
                                                                <input type="hidden" name="skill_id[]" value="{{$skill->id}}">
                                                                <label style="margin-bottom: 7px;">Skill</label>
                                                                <input type="text" name="skill_name[]" placeholder="skills" value="{{$skill->skill}}" class="control-form-me">
                                                            </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                    <div class="add-blk add-skills btn btn-info mt-50">
                                        <i class="fa fa-plus"></i>
                                        <span>Add Skill</span>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="form-group add-social mt-s">
                                <h2>Add social Links</h2>
                                <div class="block-container">
                                    @if (count($socials) == 0)
                                        <span id="show_social" style="text-align: center;">no social links details available</span>
                                    @else
                                    <div class="all-socials">
                                        @foreach ($socials as $social)
                                            {{-- <div class="new-socials"> --}}
                                                <div class="new-skills">
                                                    <div class="row">
                                                        <div class="add-border"><h2>New Social</h2><span></span></div> <div class="del-btn"> <div class="btn btn-sm btn-danger btn-me" id="remove-social"> <i class="fa fa-trash"></i> </div></div>
                                                        <div class="col-lg-12">
                                                            <input type="hidden" name="social_id[]" value="{{$social->id}}">
                                                            <label style="margin-bottom: 7px;">Social Name</label>
                                                            <input type="text" name="social_name[]" placeholder="social link" value="{{$social->social_name}}" class="control-form-me">
                                                            <label style="margin-bottom: 7px;">Profile Link</label>
                                                            <input type="link" name="social_link[]" value="{{$social->social_link}}" class="control-form-me"> 
                                                            </div>
                                                    </div>
                                                </div>
                                        @endforeach
                                    </div>
                                    @endif
                                    <div class="add-blk add-socials btn btn-info mt-50">
                                        <i class="fa fa-plus"></i>
                                        <span>Add Social</span>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <hr class="mt-100">
                            <input type="submit" name="submit" value="Create Resume" class="btn-sub">
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->


    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- Parallax js -->
    <script src="{{asset('js/dzsparallaxer.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/form-script.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>

</body>
</html>