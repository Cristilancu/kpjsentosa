@extends('layouts.front')


@section('title')
    <title>Services</title>
  @stop

@section('content')


    <!-- InstanceBeginEditable name="EditRegion1" -->
    <section class="sub-page-banner8 text-center" data-stellar-background-ratio="0.3">
      <div class="overlay"></div>
      <div class="container">
      @if($setting = Helper::hasSetting('services')){
                        {!!$setting->line1!!}
      @else  
        <h1 class="entry-title">Services &amp; Procedures</h1>
      @endif
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
    <!-- InstanceEndEditable -->
    <!-- Sub Page Content
			============================================= -->
    		<!-- InstanceBeginEditable name="EditRegion2" -->
    		<div id="sub-page-content" class="no-padding-bottom clearfix">
              <!-- Specialty
				============================================= -->
              <section class="no-bg-img">
                <div class="container">
                @if($setting = Helper::hasSetting('services'))
                        {!!$setting->line2!!}
                @else  
                  <h2 class="light bordered main-title"><span>Specialties</span></h2>
                @endif
                  <div class="row text-left">
                		
              @foreach(Helper::getServices() as $key=>$service)
                @if($key%3==2)
                  <div class="row">
                @endif
                    <div class="col-md-4">
                      <div class="feature"> <i class="pull-left feature-icon"><img src="{{$service->image}}" alt="Anesthesiology"></i>
                          <div class="feature-content">
                            <h5><a href="{{url('/services_procedures/'.$service->id)}}">{{preg_replace('/(?:<|&lt;)\/?([a-zA-Z]+) *[^<\/]*?(?:>|&gt;)/', '', $service->title)}}</a></h5>
                            <p>{!!$service->description!!}</p>
                            <div class="height10"></div>
                            <a href="{{url('/services_procedures/'.$service->id)}}">- Learn More</a>
                          </div>
                      </div>
                    </div>
                  @if($key%3==2)
                      </div>
                @endif
              @endforeach
                </div>
                </div>
              </section>
              <!-- Find Health Information -->

              @include('common.health_info')
 

            </div>
    		<!-- InstanceEndEditable -->
    		<!--end sub-page-content-->
    
    
	<div class="solid-row"></div>
    
@stop


@section('end_scripts')

   <script type="text/javascript">
          $('.lem').removeClass('active')
          $('.lem_services').addClass('active')

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
