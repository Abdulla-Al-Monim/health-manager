
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
    <!-- font awesome bootstrap cdn link -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Hospital</title>
  </head>
  <body>
    <header class="head">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="#"><img src="{{asset('frontend/images/logo.png')}}"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Doctors</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                  </li>
                  @if( Route::has('login'))
		            @auth
		              @if( Auth::user()->user_type ==='PATIENT' )
		                <li class="nav-item dropdown"> <a href="#" class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">Welcome, {{Auth::user()->name}} </span><b class="caret"></b></a>
		                  <ul class="dropdown-menu">
                        <li>
                          <a href="{{ route('patient.dashbord') }}"class="nav-link">
                                Dashboard
                              </a>
                        <li>
                        </li>
		                   
		                      <form method="POST" action="{{ route('logout') }}">
		                          @csrf

		                          <a href="{{ route('logout') }}"
		                              onclick="event.preventDefault();
		                              this.closest('form').submit();">
		                              {{ __('Logout') }}
		                          </a>
		                        </form>
		                    </li>
		                    
		                  </ul>
		                </li>
		                 @elseif( Auth::user()->user_type ==='ADMIN' )
		                <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle nav-link" data-hover="dropdown" data-toggle="dropdown"><span class="value">Welcome, {{Auth::user()->name}} </span><b class="caret"></b></a>
		                  <ul class="dropdown-menu">
		                  <li>
                          <a href="{{ route('admin.dashbord') }}" class="nav-link">
                                Dashboard
                              </a>
                        <li>
		                    <li>
		                      <form method="POST" action="{{ route('logout') }}">
		                          @csrf

		                          <a href="{{ route('logout') }}"class="nav-link"
		                              onclick="event.preventDefault();
		                              this.closest('form').submit();">
		                              {{ __('Logout') }}
		                          </a>
		                        </form>
		                    </li>
		                    
		                  </ul>
		                </li>
		                @elseif( Auth::user()->user_type ==='DOCTOR' )
		                <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle nav-link" data-hover="dropdown" data-toggle="dropdown"><span class="value">Welcome, {{Auth::user()->name}} </span><b class="caret"></b></a>
		                  <ul class="dropdown-menu">
		                   <li>
                          <a href="{{ route('doctor.dashbord') }}" class="nav-link">
                                Dashboard
                              </a>
                        <li>
		                    <li>
                          
		                      <form method="POST" action="{{ route('logout') }}">
		                          @csrf

		                          <a href="{{ route('logout') }}"
		                              onclick="event.preventDefault();
		                              this.closest('form').submit();">
		                              {{ __('Logout') }}
		                          </a>
		                        </form>
		                    </li>
		                    
		                  </ul>
		                </li>
		                @else
		                  <li><a href="{{route('login')}}" class="nav-link"><i class="icon fa fa-lock"></i>Login</a></li>
		                  <li><a href="{{route('registation.index')}}" ><i class="icon fa fa-user"></i>Register</a></li>
		                @endif
		                <!-- <li><a href="{{route('login')}}"><i class="icon fa fa-lock"></i>Login</a></li>
		            <li><a href="{{route('register')}}"><i class="icon fa fa-user"></i>Register</a></li> -->
		              @endif

		            @endif

                  <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('registation.index')}}">Registation</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- About us section -->
    <section class="about">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="about-img">
                  <img src="{{asset('frontend/images/about.jpg')}}" class="img-fluid">
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="contant">
                  <h1>ABOUT US</h1>
                  <h3>What we are and our history</h3>
                  <p>Virtual Health Manager is an online web based application that helps patients find their preferred doctors through the system. The system provides service and maintains integrity of all users. 
It transforms the analog healthcare into a digital one. The aim is to establish a close synergy among medical skills, technology and advancements in IT.</p>
                  <!-- <div class="btn-about">
                    <button type="button" class="btn btn-primary">Read more</button>
                  </div> -->
                </div>              
                   <span></span>               
                <div class="contant">
                  <h1>VISION & MISSION</h1>
                  <h3>Our goal and thoughts</h3>
                  <p>To be the emerging markets largest integrated healthcare network.</p>
                  <p>To build a legacy of accessible, high quality, safe private healthcare for low and middle-income patients in emerging markets.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--service section -->
    <section class="service">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12 contant-1">
                <div class="">
                    <h1>Our services list</h1>
                    <div class="sr">
                      <p>Online registration procedure via web service.
 Providing prescriptions to registered patients which will be automatically generated based on their provided data .
 Customization of the generated prescription according to the patient’s comfort .
 Online interaction between patient and doctor when needed .
 Individual information module for each registered patient .
 Individual information module for each doctor .
 Improvement of the system of an existing hospital . 
                    </p>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 contant-2">
            <div class="service-benefit">
              <h1>Our Benefits</h1>
              <h3>It is a long established fact that a reader will .</h3>
              <div class="">
              <p class="fa fa-caret-right"> Online registration instead of traditional one</p>
              <p class="fa fa-caret-right"> No hassle for booking appointment as it will be done online</p>
              <p class="fa fa-caret-right"> Online payment options</p>
              <p class="fa fa-caret-right"> Efficient time management</p>
              <p class="fa fa-caret-right"> Customization of the generated report</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 contant-3">
            <h1>Our Working Hours</h1>
            <h3>It is a long established fact that a reader will .</h3>
            <table width="100%">
              <tr>
                <td class="text-left"><p>Monday-Wednesday</p></td>
                <td class="text-right"><p>08.00-18.00</p></td>
              </tr>
              <tr>
                <td class="text-left"><p>Thursday -Friday</p></td>
                <td class="text-right"><p>08.00-18.00</p></td>
              </tr>
              <tr>
                <td class="text-left"><p>Saturday</p></td>
                <td class="text-right"><p>08.00-18.00</p></td>
              </tr>
              <tr>
                <td class="text-left"><p>Sunday</p></td>
                <td class="text-right"><p>Closed</p></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!-- service we offer --> 
    <section class="service-we-offer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 m-auto text-center">
            <div>
              <h1>Service We Offer</h1>
              <p>Our department & special service</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- our dept -->
    <section class="our-dept">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-3">
                <div class="img">
                  <img src="{{asset('frontend/images/car.png')}}" class="img-fluid">
                </div>
              </div>
              <div class="col-md-9">
                <h1>Emergency Care</h1>
                <p>We provide emergency care to all our registered patients. In case of any difficulty getting this service, patients need to contact support.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-3">
                <div class="img">
                  <img src="{{asset('frontend/images/call-center.png')}}" class="img-fluid">
                </div>
              </div>
              <div class="col-md-9">
                <h1>Medicine</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-3">
                <div class="img">
                  <img src="{{asset('frontend/images/call-center-1.png')}}" class="img-fluid">
                </div>
              </div>
              <div class="col-md-9">
                <h1>Call Center 24/7</h1>
                <p>Our Medicine Consultants are equipped to deal with whatever problem a patient brings — no matter how common or rare, or how simple or complex.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
     <!-- our dept -->
    <section class="our-dept">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-3">
                <div class="img">
                  <img src="{{asset('frontend/images/blood-test.png')}}" class="img-fluid">
                </div>
              </div>
              <div class="col-md-9">
                <h1>Blood Test</h1>
                <p>Our system allows collecting, screening, typing, processing, and storing whole blood, packed red blood cells, fresh frozen plasma and platelet concentrate, gathered as a result of blood donation, preserved for patient use.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-3">
                <div class="img">
                  <img src="{{asset('frontend/images/hurt.png')}}" class="img-fluid">
                </div>
              </div>
              <div class="col-md-9">
                <h1>Cardiac Surgery</h1>
                <p>Cardiac Electrophysiology and Heart failure are interrelated. Our Electrophysiologists are expert and dedicated for such services.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-3">
                <div class="img">
                  <img src="{{asset('frontend/images/dental.png')}}" class="img-fluid">
                </div>
              </div>
              <div class="col-md-9">
                <h1>Dental Care</h1>
                <p>Our system offers full scope of the dental specialty, including general dentistry and specialist services in oral & maxillofacial surgery, orthodontics and restorative dentistry</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- our dept -->
    <section class="our-dept our-dept-1">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-3">
                <div class="img">
                  <img src="{{asset('frontend/images/outDoorCheck.png')}}" class="img-fluid">
                </div>
              </div>
              <div class="col-md-9">
                <h1>Outdoor Checkup</h1>
                <p>The system allows full outdoor checkups for all kind of patients</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-3">
                <div class="img">
                  <img src="{{asset('frontend/images/eye.png')}}" class="img-fluid">
                </div>
              </div>
              <div class="col-md-9">
                <h1>Ophthalmology</h1>
                <p>Our trained and experienced Consultant provides specialised treatment for a wide variety of eye problems.
</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-3">
                <div class="img">
                  <img src="{{asset('frontend/images/hurt-d.png')}}" class="img-fluid">
                </div>
              </div>
              <div class="col-md-9">
                <h1>Heart disease</h1>
                <p>The system allows full outdoor checkups for all kind of patients</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Why Choose Us -->
    <section>
      
    </section>
    <section class="service-we-offer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 m-auto text-center">
            <div>
              <h1>Why Choose Us</h1>
              <p>Our department & special service</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="our-dept our-dept-1">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="row">
              <div class="col-md-3">
                <div class="img">
                  <img src="{{asset('frontend/images/call-center-1.png')}}" class="img-fluid">
                </div>
              </div>
              <div class="col-md-9">
                <h1>Health Information</h1>
                <p>Patients can find data related to their medical history including symptoms, diagnoses, procedures and outcomes</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="row">
              <div class="col-md-3">
                <div class="img">
                  <img src="{{asset('frontend/images/5556556.png')}}" class="img-fluid">
                </div>
              </div>
              <div class="col-md-9">
                <h1>Medical Education</h1>
                <p>initial training are provided to interested candidates in order to become a physician and additional training thereafter.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="row">
              <div class="col-md-3">
                <div class="img">
                  <img src="{{asset('frontend/images/blood-test.png')}}" class="img-fluid">
                </div>
              </div>
              <div class="col-md-9">
                <h1>Symptom Check</h1>
                <p>The system provides a short, safe and anonymous health checkup. Your answers will be carefully analyzed and you'll learn about possible causes of your symptoms.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="row">
              <div class="col-md-3">
                <div class="img">
                  <img src="{{asset('frontend/images/doctor-man.png')}}" class="img-fluid">
                </div>
              </div>
              <div class="col-md-9">
                <h1>Qualified Doctors</h1>
                <p>All of our doctors are medically qualified and available whenever needed</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="contract">
      <div class="container">
        <div class="row">
          <div class="col-md-6 a">
            <div class="row">
              <div class="col-md-6">
                <span class="fa fa-envelope-o"></span>
                <a href="#">support@mail.com</a>
              </div>
              <div class="col-md-6">
                <span class="fa-phone"></span>
                <a href="#">803-010-03</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <ul class="text-right">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
