
<aside class="main-sidebar bg-light elevation-4">
    
    <br>
    <!-- Brand Logo -->
    <a href="admin-dashboard" class="brand-link">
        <img src="{{ asset('admin/img/buslogo.png') }}" alt="admin bus logo" class="brand-image"
            style="opacity: .8">
            
        <span class="brand-text font-weight-light">Admin-System</span>
    </a>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('user.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('operators.index')}}" class="nav-link">
                        <i class="fas fa-home"></i>
                        <p>
                         Operator
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('drivers.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                          Driver
                        </p>
                    </a>
                </li>

              


                <li class="nav-item">
                    <a href="{{route('buses.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-bus"></i>
                        <p>
                            Buses
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('regions.index') }}" class="nav-link">
                        <i class="fas fa-globe"></i>
                        <p>Regions</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('sub_regions.index') }}" class="nav-link">
                        <i class="fas fa-map-marker"></i>
                        <p>Sub Regions</p>
                    </a>
                </li>

              
                  
                  </li>
                  <li class="nav-item">
                    <a href="{{route('bus_schedules.index')}}" class="nav-link">
                      <i class="fas fa-bus"></i> <i class="fas fa-map-marker-alt"></i> <p>Route Schedule</p>
                    </a>
                  </li>
                  
                  
                

                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-bus"></i> </i> <p>Seat</p>
                  </a>
                </li>

            </li>
            
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="#"></i> </i> <p>Passenger List</p>
              </a>
            </li>
              
             
                  
                
                <div class="text-center mt-auto p-3">
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit" class="btn btn-danger" style="width:200px;">Logout</button>
                    </form>
                  </div>

                 
                
            </ul>
        </nav>

        
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>



