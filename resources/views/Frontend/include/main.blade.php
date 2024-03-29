<!DOCTYPE html>
<html lang="en">

  @include('Frontend.include.head')
 
  <body>
    

       
    
        
      <!-- Navbar -->
      @include('Frontend.include.navbar')

      <!-- Main sidebar -->
      {{-- @include('Frontend.include.sidebar') --}}
    
      <!-- Main content -->
    <!--welcome-hero start -->
	{{-- <img src="{{asset('frontend/assets/images/welcome-hero/banner.jpg')}}" > --}}
    <section>
     
          @yield('content')
    </section>
    

		{{-- <section id="home" class="welcome-hero"> --}}
				{{-- <div class="container">

        
			<div class="welcome-hero-txt">
					<h2>best place to find and explore <br> that all you need </h2>
					<p>
						Find Best Place, Restaurant, Hotel, Real State and many more think in just One click 
					</p>
				</div>
				<div class="welcome-hero-serch-box">
					<div class="welcome-hero-form">
						<div class="single-welcome-hero-form">
							<h3>what?</h3>
							<form action="index.html">
								<input type="text" placeholder="Ex: palce, resturent, food, automobile" />
							</form>
							<div class="welcome-hero-form-icon">
								<i class="flaticon-list-with-dots"></i>
							</div>
						</div>
						<div class="single-welcome-hero-form">
							<h3>location</h3>
							<form action="index.html">
								<input type="text" placeholder="Ex: london, newyork, rome" />
							</form>
							<div class="welcome-hero-form-icon">
								<i class="flaticon-gps-fixed-indicator"></i>
							</div>
						</div>
					</div>
					<div class="welcome-hero-serch">
						<button class="welcome-hero-btn" onclick="window.location.href='#'">
							 search  <i data-feather="search"></i> 
						</button>
					</div> 
					 
					   
					
				</div> 
			</div> --}}

		{{-- </section><!--/.welcome-hero--> --}}
		<!--welcome-hero end -->


    
	 

    
			
			
			
      <!-- Main Footer -->
      {{-- @include('Frontend.include.footer')

      <!-- Scripts -->
      @include('Frontend.include.script') --}}
      
    

	
        
	
      
	 
	  
  </body>

</html>
