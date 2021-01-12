  <!-- Main Sidebar Container -->
    @if( Route::has('login'))
    @auth
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('patient.dashbord')}}" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dashbord</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Doctor Manage</li>
          <li class="nav-item">
            <a href="{{route('doctor.all')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Doctor List</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('doctor.appoint.list')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Appointed Doctor</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('patient.change.password')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Change Password</p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
        @endif

@endif