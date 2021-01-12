@extends('backend.registation.layout.template')
@section('dashboard-content')
<body class="register-page" style="min-height: 586.391px;">
<div class="register-box">


  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new User</p>

      <form action="{{route('registation.store')}}" method="POST">
      	@csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="name" name="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Phone" name="phone">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Address" name="address">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-address-card"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="form-group">
	        <label>Gender</label>
	        <select class="form-control" name="gender">
	          <option value="0">Male</option>
	          <option value="1">Female</option>
	        </select>
	     </div>
	     <div class="form-group">
	        <label>User Type</label>
	        <select class="form-control" name="user_type">
	          <option value="PATIENT">Patient</option>
	          <option value="ADMIN">Admin</option>
	        </select>
	     </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">


            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" name=""class="btn btn-primary btn-block"value="Register"> 
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>

@endsection