<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from geeko.netlify.app/template-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jul 2022 19:23:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Multipurpose Template</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="../css/responsive.css">

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
                                <p class="topnote">Fill all required fields and click create cv to download CV in both PDF and PNG formats</p>
                                
                            </div>
                            <div class="col-lg-6 col-md-12 mt-s">
                                <a href="#" class="btn btn-primary">Download as PDF</a>
                                <a href="#" class="btn btn-soft-primary ms-2">Download as PNG</a>
                            </div>
                        </div>
                    </div>
                    <div class="container">

                        <form method="post" action="#">
                            <div class="mt-150">
                                <h2>Personal Info</h2>
                                <div class="block-container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-2 col-md-4">
                                            <img src="{{asset('img/test-img/1.jpg')}}" class="d-block" alt="">
                                        </div>
                                        <div class="col-lg-5 col-md-8 mt-s">
                                            <h6 class="">Upload your picture</h6>
                                            <p class="text-muted mb-0">For best results, use image 300px by 300px in either .jpg or .png</p>
                                        </div>
                                        <div class="col-lg-5 col-md-12 mt-s">
                                            <a href="#" class="btn btn-primary">Upload</a>
                                            <a href="#" class="btn btn-soft-primary ms-2">Remove</a>
                                        </div>
                                    </div>
                                    <div class="mt-30">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>Full Name:</label>
                                                <input type="text" name="full-name" class="control-form-me" placeholder="enter your name">
                                            </div>
                                            
                                            <div class="col-lg-6">
                                                <label>Date of Birth:</label>
                                                <input type="text" name="jop-title" class="control-form-me" placeholder="Ex: Web Developer">
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Your Address:</label>
                                                <input type="text" name="address" class="control-form-me" placeholder="enter your address">
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Your Email:</label>
                                                <input type="text" name="email" class="control-form-me" placeholder="enter your name">
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Nationality:</label>
                                                <input type="text" name="web-link" class="control-form-me" placeholder="enter your website link">
                                            </div>
                                            
                                            <div class="col-lg-6">
                                                <label>Phone No:</label>
                                                <input type="text" name="phone" class="control-form-me" placeholder="Ex: Web Developer">
                                            </div>
                                            <div class="col-lg-12">
                                                <label>Your Bio Here</label>
                                                <textarea name="comments" id="comments" rows="4" class="control-form-me" placeholder="About Me :"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group add-edu">
                                <h2>Add Educations</h2>
                                <div class="all-edus">
                                    <div class="new-edu">
                                        {{-- <div  style="font-size: 20px; float:right; margin-bottom:20px;"><a class="text-danger" id="add-edu"><i class="fa fa-trash"></i></a></div> --}}
                                        <label>Field of study:</label>
                                        <input type="text" name="edu[]" class="control-form-me" placeholder="Ex: Computer Science">
                                        <label>Degree:</label>
                                        <input type="text" name="edu[]" class="control-form-me" placeholder="Ex: Bachelor's">
                                        <label>School:</label>
                                        <input type="text" name="edu[]" class="control-form-me" placeholder="Ex: al-albayt university">
                                        <div class="form-row">
                                            <div class="col">
                                                <label>From year:</label>
                                                <input type="month" name="edu[]" class="control-form-me">
                                            </div>
                                            <div class="col">
                                                <label>To year (optional=present):</label>
                                                <input type="month" name="edu[]" class="control-form-me">
                                            </div>
                                        </div>
                                    </div><hr>
                                </div>

                                <div class="add-blk btn btn-info" id="add-edu"> 
                                    <i class="fa fa-plus"></i>
                                    <span>Add another education</span>
                                </div>
                                
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group add-exp mt-s">
                                <h2>Add Experiences</h2>
                                <div class="all-exps">
                                    <div class="new-exp">
                                        <label>Title:</label>
                                        <input type="text" name="exp[]" class="control-form-me" placeholder="Ex: Web Developer">
                                        <label>Company:</label>
                                        <input type="text" name="exp[]" class="control-form-me" placeholder="Ex: ProgressSoft">
                                        <div class="form-row">
                                            <div class="col">
                                                <label>From year:</label>
                                                <input type="month" name="exp[]" class="control-form-me">
                                            </div>
                                            <div class="col">
                                                <label>To year (optional=present):</label>
                                                <input type="month" name="exp[]" class="control-form-me">
                                            </div>
                                        </div>
                                        <label>Description (optional):</label>
                                        <textarea name="exp[]" class="control-form-me"></textarea>
                                    </div>
                                </div>
                                <div class="add-blk btn btn-info" id="add-exp">
                                    <i class="fa fa-plus"></i>
                                    <span>Add another experience</span>
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <div class="form-group add-skill mt-s">
                                <h2>Add Skills</h2>
                                <div class="block-container">
                                    <div class="all-skills">
                                        <div class="new-skills">
                                            <label>Skill</label>
                                            <input type="text" name="skills[]" class="control-form-me">
                                            <label>Proficiency</label>
                                            <input type="text" name="skills[]" class="control-form-me">
                                        </div>
                                    </div>
                                

                                    <div class="add-blk add-skills btn btn-info mt-50">
                                        <i class="fa fa-plus"></i>
                                        <span>Add another Skill</span>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="form-group add-social mt-s">
                                <h2>Add social Links</h2>
                                <div class="block-container">
                                    <div class="all-socials">
                                        <div class="new-skills">
                                            <label>Social Name</label>
                                            <input type="text" name="socials[]" class="control-form-me">
                                            <label>Social Link</label>
                                            <input type="text" name="socials[]" class="control-form-me">
                                            <label>Social icon image (16px*16px)</label>
                                            <input type="file" name="socials[]" class="control-form-me" />
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="add-blk add-socials btn btn-info mt-50">
                                        <i class="fa fa-plus"></i>
                                        <span>Add another social</span>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="form-group add-social mt-s">
                                <h2>Add Hoppies</h2>
                                <div class="block-container">
                                    <div class="all-hoppies">
                                        <div class="new-skills">
                                            <label>Hoppy icon image (32px*32px)</label>
                                            <input type="file" name="hoppies[]" class="control-form-me" />
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="add-blk add-hoppies btn btn-info mt-50">
                                        <i class="fa fa-plus"></i>
                                        <span>Add another Hoppy</span>
                                    </div>
                                </div>
                            </div>

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
    <script src="../js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../js/plugins.js"></script>
    <!-- Parallax js -->
    <script src="../js/dzsparallaxer.js"></script>
    <!-- Active js -->
    <script src="../js/form-script.js"></script>
    <script src="../js/script.js"></script>

</body>
</html>