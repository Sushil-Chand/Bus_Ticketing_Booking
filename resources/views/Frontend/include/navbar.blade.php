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
                        @if(auth()->check()) <!-- Check if user is authenticated -->
                        <li class="nav-item dropdown position-static">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        
                        
                            @else
                                <!-- If user is not authenticated -->
                                <li class="#"><a href="{{ route('login') }}">Sign in</a></li>
                                <li class="#"><a href="{{ route('register') }}">Register</a></li>
                            @endif

                                
                      
                
                       

                        {{--)
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
                     
                       
                        
                     --}}
                    </ul>
                    
                    
                </div><!-- /.navbar-collapse -->
                
            </div><!--/.container-->

            
        </nav><!--/nav-->
        <!-- End Navigation -->
    </div><!--/.header-area-->
   

</section><!-- /.top-area-->
<!-- top-area End -->

                        {{-- @guest <!-- Check if user is a guest (not logged in) -->
                            <li class="scroll"><a href="{{ route('login') }}">Sign in</a></li>
                            <li class="scroll"><a href="{{ route('register') }}">Register</a></li>
                        @endguest
                        @auth <!-- Check if user is authenticated (logged in) -->
                            <li class="scroll"><a>{{ auth()->user()->name }}</a></li>
                            <x-responsive-nav-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-responsive-nav-link>
    
                        @endauth --}}
                        {{-- <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                       
                        <!-- Authentication -->

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form> --}}