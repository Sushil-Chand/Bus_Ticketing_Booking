<!DOCTYPE html>
<html lang="en">

  @include('Frontend.include.head')
 
  <body>
    <div class="wrapper">        
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
    
      <!-- /.content -->	
			
	
      <!-- Main Footer -->
       @include('Frontend.include.footer')

      <!-- Scripts -->
      @include('Frontend.include.script') 
    
    

		
      
	</div>
	  
  </body>

</html>
