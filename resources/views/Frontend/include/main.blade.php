<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  @include('Frontend.include.head')
 
  <body>
    {{-- <div class="wrapper"> --}}

        {{-- <body class="hold-transition sidebar-mini layout-fixed">
            <div class="wrapper"> --}}
    
        
      <!-- Navbar -->
      @include('Frontend.include.navbar')

      <!-- Main sidebar -->
      {{-- @include('Frontend.include.sidebar') --}}
      <!-- Main content -->
      <section class="content">
        {{-- @include('sweetalert::alert') --}}
        @yield('content')
      
      </section>
      <!-- /.content -->
    




      <!-- Main Footer -->
      @include('Frontend.include.footer')

      <!-- Scripts -->
      @include('Frontend.include.script')
      
    </div>
    <!-- ./wrapper -->
  </body>

</html>
