<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>User Profile</title>

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
    @include('layout.header')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Welcome Area Start ##### -->
    <div class="breadcumb-area clearfix dzsparallaxer auto-init" data-options='{direction: "normal"}'>
        <div class="divimage dzsparallaxer--target" style="width: 101%; height: 130%; background-image: url(img/bg-img/bg-2.html)"></div>
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con ">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">User Profile</h2>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Area End ##### -->

    <section class="pricing section-padding-50-70">
        
        <div class="container">
            
            <div class="row">
                <!-- Single Table -->
                <div class="col-lg-3 col-md-4">
                    <!-- Collapse -->
                    <div class="single_price_table_content wow fadeInUp" data-wow-delay="0.2s">
                       <div class="card-body">
                          <!-- Heading -->
                          <h6 class="text-uppercase ">
                             Account
                          </h6>
                          <?php $current_file_name = basename($_SERVER['REQUEST_URI'], ".php"); ?>
                          <ul class="nav-dashboard">
                             <li class="nav-item">
                                <a class="nav-link {{ $current_file_name == 'dashboard' ? 'active' : '' }}" href="user-profile.html">Dashboard</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link " href="user-profile.html">User Profile</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="social-profiles.html">Create CV</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="my-properties.html">Apply for Job</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="favorite-properties.html">Mentoring programme</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="add-property.html">Scholarship</a>
                             </li>
                          </ul>
                       </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="who-we-contant mt-s">
                        <div class="dream-dots">
                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <h4>Our Pricing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu. Quisque aliquam posuere tortor, sit amet convallis nunc scelerisque in.</p>

                        <div class="free-7">
                            <span>Lets Build CV</span>
                            <p> with 7days of Free Trial</p>
                        </div>
                        <div class="terms mt-30">
                            <a href="#">Terms & Conditions </a>
                            <p>subject to change with perior notice</p>
                        </div>
                        
                    </div>
                </div> --}}
                <div class="col-lg-8 col-md-8">
                    <!-- Single Table -->
                    <div class="col-lg-12 col-md-12">
                        <div class="single_price_table_content wow fadeInUp" data-wow-delay="0.2s">
                            <div class="price_table_text">
                                <h1>JOB</h1>
                                <h5 class="gradient-text cyan">application</h5>
                            </div>
                            <div class="table_text_details">
                                <h3>Job Application Status</h3>
                                <p>Yet to activate</p>
                                {{-- <a href="contact-us.html" class="button mt-s">Get Started</a> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Single Table -->
                    <div class="col-lg-12 col-md-12">
                        <div class="single_price_table_content wow fadeInUp" data-wow-delay="0.3s">
                            <div class="price_table_text">
                                <h1>CV</h1>
                                <h5 class="gradient-text cyan">creation</h5>
                            </div>
                            <div class="table_text_details">
                                <h3>CV / RESUME</h3>
                                <p>Application completed</p>

                                <a href="contact-us.html" class="button mt-s">create / edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </section>



    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img">

        <div class="footer-content-area mt-0">
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
                                <a href="#"><p>Advertiser Agreement</p></a>
                                <a href="#"><p>Acceptable Use Policy</p></a>
                                <a href="#"><p>Privacy Policy</p></a>
                                <a href="#"><p>Technology Privacy</p></a>
                                <a href="#"><p>Developer Agreement</p></a>
                            </div>
                        </div>
                    </div>
                      
                    <div class="col-12 col-lg-2 col-md-6 ">
                        <!-- Content Info -->
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                                <h5>NAVIGATE</h5>
                                <a href="#"><p>Advertisers</p></a>
                                <a href="#"><p>Developers</p></a>
                                <a href="#"><p>Resources</p></a>
                                <a href="#"><p>Company</p></a>
                                <a href="#"><p>Connect</p></a>
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
    </footer>
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



<!-- Mirrored from geeko.netlify.app/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jul 2022 19:23:00 GMT -->
</html>