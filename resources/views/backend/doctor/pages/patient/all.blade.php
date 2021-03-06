@extends('backend.doctor.layout.template')

@section('dashboard-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Patients</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashbord</a></li>
              <li class="breadcrumb-item active">Patient List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Manage </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <div class="table-responsive">
                  <table class="table table-resposive">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col"># Si</th>
                        <th scope="col">Doctor Name</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Prescriotion</th>
                        <th scope="col">Test</th>
                      </tr>
                    </thead>
                  <tbody>
                    @php
                      $i = 1;
                    @endphp
                    @foreach($patients as $patient)
                    <tr>
                      <td scope="row">
                        {{$i}}
                      </td>
                      <td>{{$patient->doctor_name}}</td>
                      <td>{{$patient->patient_name}}</td>
                      <td>
                        <a href="{{route('prescription.create',$patient->patient_id)}}" class=" ">Create</a>
                        <a href="{{route('prescription.show',$patient->patient_id)}}" class=" ">Show</a>
                      </td>
                      <td>
                        <a href="{{route('test.create',$patient->patient_id)}}" class=" ">Create</a>
                        <a href="{{route('test.show',$patient->patient_id)}}" class=" ">Show</a>
                      </td>
                    </tr>
                    @php
                      $i++;
                    @endphp
                    @endforeach
                  </tbody>
                </table>
                </div>
                

                
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection