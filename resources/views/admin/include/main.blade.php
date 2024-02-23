<!DOCTYPE html>
<html lang="en">

  @include('admin.include.header')
 
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    
      <!-- Navbar -->
      @include('admin.include.navbar')

      <!-- Main sidebar -->
      @include('admin.include.sidebar')

      <!-- Main content -->
      <section class="content">
        
        @yield('content')
      
      </section>
      <!-- /.content -->

      <!-- Main Footer -->
      @include('admin.include.footer')

      <!-- Scripts -->
      @include('admin.include.script')
      
    </div>
    <!-- ./wrapper -->
  </body>

</html>
