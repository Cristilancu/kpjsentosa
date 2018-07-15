@extends('layouts.front')

@section('title')
    <title>Patient &amp; Visitors</title>
  @stop

@section('content')


    <section class="sub-page-banner15 text-center" data-stellar-background-ratio="0.3">
      <div class="overlay"></div>
      <div class="container">
        <h1 class="entry-title">Patients &amp; Visitors</h1>
        <!--<p>Staff is eagerly awaiting to serve our patients and visitors with warm welcome and glowing smile.</p>-->
      </div>
    </section>

    <div class="page-header-breadcrumb">

        <ol class="breadcrumb page-breadcrumb text-center">
            <li><a href="/make-appointment">Make an Appointment</a>&nbsp;</li>

            @if(\Auth::check() && \Auth::user()->is_admin != 1)
                <li><a href="/patient/dashboard">Dashboard</a>&nbsp;</li>
            @endif
            @if(\Auth::check() && \Auth::user()->is_admin != 1)
                @if(isset(\Auth::user()->patient))
                    <li><a href="/patient/dashboard">You are logged in as: {{\Auth::user()->patient->first_name}} {{\Auth::user()->patient->last_name}}</a></li>
                    <li><a href="/patient/logout">Logout</a></li>
                @else
                    <li><a href="/patient/dashboard">You are logged in as: {{\Auth::user()->name}}</a></li>
                    <li><a href="/patient/logout">Logout</a></li>
                @endif
            @else
                <li><a href="/patient/registration">Sign Up</a>&nbsp;</li>
                <li><a href="#" data-target="#modal-login" data-toggle="modal">Patient Login</a>&nbsp;</li>
            @endif
        </ol>

            @include('front.loginmodel') 

      </div>

    <!-- Sub Page Content
			============================================= -->

    <div id="sub-page-content clearfix">
      <!-- For patients &amp; visitors
			============================================= -->
      <div class="container padding-top-35">
        <div class="row">
          <div class="col-md-6">
            <h2 class="light bordered">For <span>Patients</span></h2>

            @foreach($patients as $patient)
            <div class="feature"> <i class="pull-left feature-icon"><img src="{{ asset('images/Patients&VisitorLists/' . $patient->image_path) }}" alt="{{ $patient->title }}"></i>
                <div class="feature-content">
                  <h5><a href="{{url('patients_visitors_detail')}}">{{ $patient->title }}</a></h5>
                  <p>{{ $patient->short_desc }}</p>
                  <div class="height10"></div>
                  <p><a href="{{url('patients_visitors_detail')}}">- View Details</a></p>
                </div>
            </div>
            @endforeach

          </div>
          <!-- end col-md-6 -->
          <div class="col-md-6">
            <h2 class="light bordered">For <span>Visitors</span></h2>

            @foreach($visitors as $visitor)
            <div class="feature"> <i class="pull-left feature-icon"><img src="{{ asset('images/Patients&VisitorLists/' . $visitor->image_path) }}" alt="{{ $visitor->title }}"></i>
                <div class="feature-content">
                  <h5><a href="{{url('patients_visitors_detail')}}">{{ $visitor->title }}</a></h5>
                  <p>{{ $visitor->short_desc }}</p>
                  <div class="height10"></div>
                  <p><a href="{{url('patients_visitors_detail')}}">- View Details</a></p>
                </div>
            </div>
            @endforeach

          </div>
          <!-- end col-md-6 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
      <!-- Find Health Information
            ============================================= -->
   	@include('common.health_info')
    </div>

    <!--end sub-page-content-->
    
    
	<div class="solid-row"></div>
    
  @stop



 @section('end_scripts')
      <script type="text/javascript">
          $('.lem').removeClass('active')
          $('.lem_visitors').addClass('active')

          $('#btn-login').on('click', function(e){
            $.ajax({
              url: '/patient/login',
              type: 'POST',
              data: {'_token': '{{csrf_token()}}', 'email':$('#email').val(), 'password':$('#password').val()},
            }).done(function(data) {
              console.log("ok: ");
              console.log(data);
              if(data.status == 1){
                $('#alert-message').html(data.alert);
                setTimeout(function() {
                  location.reload();
                }, 1000);
              } else {
                $('#alert-message').html(data.alert);
              }
            }).fail(function(data) {
              console.log("error: ");
              console.log(data);
            }).always(function() {
              console.log("complete");
            });
          });
      </script>
 @stop