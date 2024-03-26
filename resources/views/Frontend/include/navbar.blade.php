<!--header-top start -->
<header id="header-top" class="header-top" >
    <ul>
        <li>
            <div class="header-top-left">
                
            </div>
        </li>
        <li class="head-responsive-right pull-right">
            <div class="header-top-right">
                <ul>
                    <li class="header-top-contact">
                        <a href="#">sign in</a>
                    </li>
                    <li class="header-top-contact">
                        <a href="#">register</a>
                    </li>

                    @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                </ul>
            </div>
        </li>
    </ul>
            
</header><!--/.header-top-->
<!--header-top end -->

<!-- top-area Start -->
<section class="top-area" >
    <div class="header-area" >
        <!-- Start Navigation -->
        <nav class="navbar  bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000"  style="background-color: rgb(244, 242, 236)" >

            <div class="container">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">Online Bus <span> Booking</span></a>

                </div><!--/.navbar-header-->
                <!-- End Header Navigation -->
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbarScroll">
                    
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class=" scroll active"><a href="#home">home</a></li>
                        <li class="scroll"><a href="#blog">About</a></li>
                        <li class="scroll"><a href="#contact">contact</a></li>
                     
                        <li class="#">
                            <a href="#">sign in</a>
                        </li>
                        <li class="#">
                            <a href="#">register</a>
                        </li>
            
                    </ul>
                    
                </div><!-- /.navbar-collapse -->
            </div><!--/.container-->
        </nav><!--/nav-->
        <!-- End Navigation -->
    </div><!--/.header-area-->
    <div class="clearfix"></div>

</section><!-- /.top-area-->
<!-- top-area End -->