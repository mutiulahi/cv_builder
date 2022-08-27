<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Resume-CV</title>

      <!-- Favicon -->
      <link rel="icon" href="../img/core-img/favicon.ico">

      <!-- Core Stylesheet -->
      <link rel="stylesheet" href="../css/style.css">
  
      <!-- Responsive Stylesheet -->
      <link rel="stylesheet" href="../css/responsive.css">

</head>

<body class="light-version">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>

   
    @include('dashboard.layout.header')
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
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">CV / RESUME</h2>
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
                @include('dashboard.layout.sidebar')

                <div class="col-lg-8 col-md-8">
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{session('error')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <!-- Single Table -->
                    <div class="col-lg-12 col-md-12">
                        <div class="single_price_table_content wow fadeInUp" data-wow-delay="0.3s">
                            <div class="price_table_text">
                                <h1>CV / RESUME</h1>
                                <h5 class="gradient-text cyan">creation</h5>
                            </div>
                            <div class="table_text_details">
                                <h3>CV / RESUME</h3>
                                {{-- check if user has data in personal detail --}}
                                @if(!empty($personal_detail))
                                    {{-- // give the user the option to edit the data --}}
                                    <a href="{{ route('edit_cv')}}" class="button mt-s">Edit</a>
                                    <a href="{{ route('cv_template')}}" class="button mt-s">Download CV</a>
                                @else
                                    <p>Please create your Resume/CV</p>
                                    <a href="{{ route('create_cv') }}" class="button mt-s">Create</a>
                                @endif
                               

                                
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
   <script src="../js/script.js"></script>

</body>
</html>