<!DOCTYPE html>
<html lang="en">



<!-- Mirrored from geeko.netlify.app/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jul 2022 19:23:00 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Login</title>

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
                            <a href="{{route('register')}}" class="btn login-btn ml-50">Sign Up</a>
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
                        
                        <h2 class="wow fadeInUp" data-wow-delay="0.3s">We're glad to see you again!</h2>
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
                        <form action="#" method="post" id="main_Signup_form" novalidate="">
                            <div class="row">
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
                                <div class="col-12 col-sm-5 text-left ">
                                    <button type="submit" class="btn dream-btn">Login</button>
                                </div>
                                {{-- <div class="col-12 col-sm-7 text-left">
                                    <p class="mb-0 mt-10">Don't have an account? <a href="#" >Sign Up</a></p>
                                </div> --}}
                            </div>
                        </form>
                        <div class="other-accounts text-center">
                            <p class="mb-0 mt-8" style="color: #d6d2d2">Don't have an account? <a href="{{route('register')}}" >Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

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



<!-- Mirrored from geeko.netlify.app/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jul 2022 19:23:00 GMT -->

</html>