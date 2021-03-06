<!DOCTYPE html>
<html lang="en">
<head>
  @include('backend.includes.header')
  @include('backend.includes.css')

  
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  @include('backend.includes.topbar')
  <!-- Navbar end-->
  <!-- Main Sidebar Container -->
  @include('backend.includes.doctor-nav')
   <!-- Main Sidebar Container end-->
  <!-- Content Wrapper. Contains page content -->
  @yield('dashboard-content')
  <!-- /.content-wrapper -->
  @include('backend.includes.footer')

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('backend.includes.script')
</body>
</html>
