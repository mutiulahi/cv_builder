<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Register</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body class="light-version">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area fadeInDown" data-wow-delay="0.2s">
        <div class="classy-nav-container  breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar  justify-content-between" id="dreamNav">

                    <!-- Logo -->
                    <a class="nav-brand " href="#"><img src="img/core-img/logo.png" alt="logo"> CV Builder </a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler demo">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">

                            <!-- Button -->
                            <a href="#" class="btn login-btn ml-50">Log in</a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Welcome Area Start ##### -->
   
    <!-- ##### Welcome Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="section-padding-100 contact_us_area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <!-- Dream Dots -->
                        
                        <h2 class="wow fadeInUp" data-wow-delay="0.3s">Let's create your account !</h2>
                        {{-- <p class="wow fadeInUp" data-wow-delay="0.4s">Provide your details below</p> --}}
                        <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- registration Form -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="contact_form">
                        <form action="{{route('register')}}" method="post" id="main_Signup_form">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="group">
                                        <input type="text" name="name" id="name3" required="">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        @error('name')
                                            <span class="text-danger" style="font-size: 12px;">{{$message}}</span>
                                        @enderror
                                        <label>Full Name</label>
                                    </div>
                                </div>
                               <div class="col-12 col-md-12">
                                    <div class="group">
                                        <input type="email" name="email" id="name4" required="">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        @error('email')
                                            <span class="text-danger" style="font-size: 12px;">{{$message}}</span>
                                        @enderror
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="group">
                                        <input type="password" name="password" id="name5" required="">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        @error('password')
                                            <span class="text-danger" style="font-size: 12px;">{{$message}}</span>
                                        @enderror
                                        <label>Password</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="group">
                                        <input type="password" name="password_confirmation" id="name6" required="">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        @error('password_confirmation')
                                            <span class="text-danger" style="font-size: 12px;">{{$message}}</span>
                                        @enderror
                                        <label>Confirm Password</label>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-12 col-sm-5 text-left ">
                                    <button type="submit" class="btn dream-btn">Register</button>
                                </div>
                                {{-- <div class="col-12 col-sm-7 text-left">
                                    <p class="mb-0 mt-10">Already have an account? <a href="{{route('login')}}" >Log in</a></p>
                                </div> --}}
                            </div>
                        </form>
                        <div class="other-accounts text-center">
                            <p class="mb-0 mt-10" style="color: #ffffff">Already have an account? <a href="{{route('login')}}" >Log in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->


    <!-- ##### Footer Area Start ##### -->
    {{-- <footer class="footer-area bg-img">

        <div class="footer-content-area spec">
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-lg-4 col-md-6">
                        <div class="footer-copywrite-info">
                            <!-- Copywrite -->
                            <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                                <div class="footer-logo">
                                    <a href="#"><img src="img/core-img/logo.png" alt="logo"> CV Builder </a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ducimus voluptatibus neque illo id repellat quisquam? Autem expedita earum quae laborum ipsum ad.</p>
                            </div>
                            <!-- Social Icon -->
                            <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">
                                <h5>PRIVACY & TOS</h5>
                                <a href="#">
                                    <p>Advertiser Agreement</p>
                                </a>
                                <a href="#">
                                    <p>Acceptable Use Policy</p>
                                </a>
                                <a href="#">
                                    <p>Privacy Policy</p>
                                </a>
                                <a href="#">
                                    <p>Technology Privacy</p>
                                </a>
                                <a href="#">
                                    <p>Developer Agreement</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-2 col-md-6 ">
                        <!-- Content Info -->
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                                <h5>NAVIGATE</h5>
                                <a href="#">
                                    <p>Advertisers</p>
                                </a>
                                <a href="#">
                                    <p>Developers</p>
                                </a>
                                <a href="#">
                                    <p>Resources</p>
                                </a>
                                <a href="#">
                                    <p>Company</p>
                                </a>
                                <a href="#">
                                    <p>Connect</p>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-lg-3 col-md-6 ">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                                <h5>CONTACT US</h5>
                                <p>Mailing Address:xx00 E. Union Ave</p>
                                <p>Suite 1100. Denver, CO 80237</p>
                                <p>+999 90932 627</p>
                                <p>support@yourdomain.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer> --}}
    <!-- ##### Footer Area End ##### -->

    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Parallax js -->
    <script src="js/dzsparallaxer.js"></script>
    <!-- Active js -->
    <script src="js/script.js"></script>

</body>


</html>