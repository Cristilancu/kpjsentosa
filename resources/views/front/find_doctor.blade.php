@extends('layouts.front')

 @section('title')
    <title>Find a doctor</title>
    <style type="text/css">
      .gallery-item-thumb{
        height: 201px; overflow: hidden;
      }
    </style>
  @stop

@section('content')
  {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
  {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>--}}
  {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
{{----}}
 <!-- Sub Page Banner
			============================================= -->
			<section class="sub-page-banner2 text-center" data-stellar-background-ratio="0.3">
				
				<div class="overlay"></div>
				
		  <div class="container">
					<h1 class="entry-title">Find Doctor</h1>
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

    		<div id="sub-page-content" class="clearfix">
              <!-- find doctor
                ============================================= -->
              <section class="no-bg-img clearfix">
                <div class="container">
                  <h2 class="light bordered">Find <span>Doctor</span></h2>
                  
                  <!-- end row -->
                </div>
                <!-- end container -->
              </section>
              <div class="container">


              @if(Session::has('message'))
              <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>!</strong> {{Session::get('message')}}.
              </div>
              @endif

                <!-- BEGIN Doctor SECTION -->
                <section class="gallery no-padding">
                  <h5 class="pull-left"><span>Filter by Specialty</span></h5>
                  <!-- GALLERY NAV -->
                  <div class="gallery-filter-nav">
                    <div class="filter active" data-filter="all">All Doctors</div>
                    @if($services->count() > 0 && $doctors->count() > 0)
                      @foreach($services as $service)
                      -
                      <div class="filter" data-filter=".{{$service->slug}}">{{strip_tags($service->title)}}</div>
                      @endforeach
                    @endif
                  </div>
                  <div id="Container-gallery">
                    <ul class="four-column-gallery clearfix">
                      @foreach($doctors as $doctor)
                      <li class="mix {{$doctor->service->slug}} {{strtr(ucwords($doctor->name),' .,','___')}}">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset($doctor->image)}}" alt="{{$doctor->name}} - {{strip_tags($doctor->service->title)}} ({{$doctor->type}})"> <a href="{{asset($doctor->image)}}" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="{{$doctor->name}} - {{strip_tags($doctor->service->title)}} ({{$doctor->type}})"></a> </div>
                          <div class="gallery-item-info">
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#{{strtr(ucwords($doctor->name),' .,','___')}}">{{$doctor->name}}</a><span>{{strip_tags($doctor->service->title)}}</span>
                            <div class="text-primary small">({{$doctor->type}})</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                  <!-- Modal -->
                  @foreach($doctors as $doctor)
                  <div id="{{strtr(ucwords($doctor->name),' .,','___')}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: {{strip_tags($doctor->service->title)}}</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset($doctor->image)}}" width="234" alt="{{$doctor->name}}" title="">
							  
                              <div class="height10"></div>

                              <div class="text-center">
                                  @if($doctor->enable_link=="appointment")
                                <a href="/make-appointment/{{$doctor->id}}{{--https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform--}}" class="btn btn-sm btn-default">Get Appointment</a>
                                  @endif
                              </div>
                              <div class="height10"></div>

                            </div>


                            <div class="doctors-detail">
                              <h4>{{$doctor->name}}<span>{{$doctor->type}}</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">{{strip_tags($doctor->service->title)}}</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">{{$doctor->degrees}}</label></p>
                              <p><label class="heading">Experience</label><label class="detail">{{$doctor->experience}}</label></p>
                              <p><label class="heading">Details</label><label class="detail">{{$doctor->details}}</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">{{$doctor->clinic_hours}}</label></p>
                            </div>

                          </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  @endforeach
                  <!-- End Modal -->
                </section>
                <!-- END GALLERY SECTION -->
              </div>
    		  <!-- end container -->
              
              
              
              
              
            </div>

    		<!--end sub-page-content-->
    
    
	<div class="solid-row"></div>
    

@stop


 @section('end_scripts')
      <script type="text/javascript">
          $('.lem').removeClass('active')
          $('.lem_doctors').addClass('active')

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
