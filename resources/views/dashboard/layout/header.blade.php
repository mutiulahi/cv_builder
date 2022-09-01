<header class="header-area">
    <div class="classy-nav-container light breakpoint-off">
        <div class="container">
            <!-- Classy Menu -->
            <nav class="classy-navbar light justify-content-between" id="dreamNav">

                <!-- Logo -->
                <a class="nav-brand light" href="{{route('home')}}"><img src="{{asset('img/core-img/logo.png')}}" alt="logo"> CV Builder.</a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
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
                        {{-- getting active file name --}}
                        <?php $current_file_name = basename($_SERVER['REQUEST_URI'], ".php"); ?>
                        <ul id="nav">
                            @if ($current_file_name == 'dashboard')
                                {{-- <a href="{{ url('/') }}" class="{{ $current_file_name }}">Home</a> --}}
                            @else
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            @endif
                            
                        </ul>

                        <!-- Button -->
                        @auth
                            <a href="{{route('logout')}}" class="btn login-btn mr-im">Log out </a>
                        @endauth
                       @guest
                            <a href="{{route('login')}}" class="btn login-btn mr-im">Log in </a>
                            <a href="{{route('register')}}" class="btn login-btn">Signup </a>
                       @endguest
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</header>