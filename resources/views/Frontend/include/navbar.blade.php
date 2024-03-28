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
                        
        
                        <li class=" scroll active"><a href="{{route('mainhome')}}">home</a></li>
                      
                        <li class="scroll"><a href="#blog">About</a></li>
                        <li class="scroll"><a href="#contact">contact</a></li>
                        @if(auth()->check()) <!-- Check if user is authenticated -->
                        <li class="nav-item dropdown position-static">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: larger;">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <div class="d-flex flex-column">
                                        <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        
                        
                            @else
                                <!-- If user is not authenticated -->
                                <li class="#"><a href="{{ route('login') }}">Sign in</a></li>
                                <li class="#"><a href="{{ route('register') }}">Register</a></li>
                            @endif

                    </ul>
                    
                    
                </div><!-- /.navbar-collapse -->
                
            </div><!--/.container-->

            
        </nav><!--/nav-->
        <!-- End Navigation -->
    </div><!--/.header-area-->
   

</section><!-- /.top-area-->
<!-- top-area End -->

                 