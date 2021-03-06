@extends('layouts.front')

@section('title')
<title>Booked Appointments</title>
@stop

@section('content')
	<section class="sub-page-banner2 text-center" data-stellar-background-ratio="0.3">
		<div class="overlay"></div>
		<div class="container">
			<h1 class="entry-title">Appointments</h1>
		</div>
	</section>

	<div class="page-header-breadcrumb">

		<ol class="breadcrumb page-breadcrumb text-center">
            <li><a href="/make-appointment">Make an Appointment</a>&nbsp;</li>
            @if(\Auth::check())
                @if(isset(\Auth::user()->patient))
                    <li><a href="/patient/dashboard">You are logged in as: {{\Auth::user()->patient->first_name}} {{\Auth::user()->patient->last_name}}</a></li>
                    <li><a href="/patient/logout">Logout</a></li>
                @else
                    <li><a href="/patient/dashboard">You are logged in as: {{\Auth::user()->name}}</a></li>
                    <li><a href="/patient/logout">Logout</a></li>
                @endif
            @else
                <li><a href="#{{--signup.html--}}">Sign Up</a>&nbsp;</li>
                <li><a href="#" data-target="#modal-login" data-toggle="modal">Patient Login</a>&nbsp;</li>
            @endif
        </ol>

	</div>

	<!-- Sub Page Content
	============================================= -->
	<div id="sub-page-content" class="no-padding-bottom clearfix">
        
                
                <!-- patient transfer Start
                ============================================= -->
                <div class="container">
                                        
                    <div class="row">

                        <div class="col-md-4">
                            @include("layouts.patient.quick_access");
                        </div><!-- end col-md-4 -->

                        <div class="col-md-8">
                            <h2 class="light bordered main-title">Booked <span>Appointments</span></h2>
                            @if(count($appointments) == 0)
                            <div class="alert alert-warning">
                                <h3 class="light text-center"><i class="fa fa-exclamation-triangle"></i> You have no booked appointments.</h3>
                           </div>
                            @endif
                                                        
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Status</th>
                                      <th>Consultant Name</th>
                                      <th>Specialty</th>
                                      <th>Appointment Date/Time</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php $i=0;?>
                                    @foreach($appointments as $appointment)
                                    <tr>
                                      <td>{{++$i}}</td>
                                        @if($appointment->status == 1)
                                        <td><span class="label label-xs label-success">Booked</span></td>
                                        @endif
                                        @if($appointment->status == 0)

                                        <td><span class="label label-xs label-danger">Canceled</span></td>
                                        @endif
                                        @if($appointment->status == 2)
                                            <td><span class="label label-xs label-info">Updated</span></td>
                                        @endif

                                      <td>{{$appointment->doctor->name}}</td>
                                      <td>{{strip_tags($appointment->doctor->service->title)}}</td>
                                      <td>{{ date("d F, Y", strtotime($appointment->appointment_date)) }} ({{$appointment->appointment_day}})<br/>{{$appointment->appointment_time}}</td>
                                      <td>
                                        <a href="/patient/appointment/{{$appointment->id}}/details" data-hover="tooltip" data-placement="top" title="Edit Appointment">
                                            <span class="label label-sm label-success"><i class="fa fa-pencil"></i></span>
                                        </a>
                                         
                                      </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                  <tfoot>
                                    <tr>
                                      <td colspan="6"></td>
                                    </tr>
                                  </tfoot>
                                </table>

                                <div class="clearfix"></div>
                              </div>

                            
                            <div class="clearfix"></div><!-- end table-responsive -->
                        </div><!-- end col-md-8 -->

                    </div><!-- end row -->
                    
                    
                    <!-- end row -->
                    
                    <!-- Modal -->
                    
                    <!-- Modal -->              
                
              </div><!-- end container -->
              <div class="height40"></div>
              
              
              <!-- Find Health Information
                ============================================= -->
              <section class="medicom-app" data-stellar-background-ratio="0.3">
                <div class="container">
                  <div class="row">
                    <div class="col-md-5"> <img src="images/mobile-hand.png" class="app-img" alt="" title=""> </div>
                    <div class="col-md-7">
                      <div class="medicom-app-content">
                        <h1>Find Health Information</h1>
                        <p class="lead">All Topics by Letters</p>
                        <form name="appoint_form" id="appoint_form" method="post" action="#" onSubmit="return false">
                          <input type="text" placeholder="Search Topics">
                          <input type="submit" value="Search" class="btn btn-danger btn-rounded" onClick="validateAppoint();">
                          <div class="clearfix"></div>
                          <div class="height20"></div>
                          <a href="#" class="btn btn-rounded btn-default btn-sm">A</a> <a href="#" class="btn btn-rounded btn-default btn-sm">B</a> <a href="#" class="btn btn-rounded btn-default btn-sm">C</a> <a href="#" class="btn btn-rounded btn-default btn-sm">D</a> <a href="#" class="btn btn-rounded btn-default btn-sm">E</a> <a href="#" class="btn btn-rounded btn-default btn-sm">F</a> <a href="#" class="btn btn-rounded btn-default btn-sm">G</a> <a href="#" class="btn btn-rounded btn-default btn-sm">H</a> <a href="#" class="btn btn-rounded btn-default btn-sm">I</a> <a href="#" class="btn btn-rounded btn-default btn-sm">J</a> <a href="#" class="btn btn-rounded btn-default btn-sm">K</a> <a href="#" class="btn btn-rounded btn-default btn-sm">L</a> <a href="#" class="btn btn-rounded btn-default btn-sm">M</a>
                          <div class="height10"></div>
                          <a href="#" class="btn btn-rounded btn-default btn-sm">N</a> <a href="#" class="btn btn-rounded btn-default btn-sm">O</a> <a href="#" class="btn btn-rounded btn-default btn-sm">P</a> <a href="#" class="btn btn-rounded btn-default btn-sm">Q</a> <a href="#" class="btn btn-rounded btn-default btn-sm">R</a> <a href="#" class="btn btn-rounded btn-default btn-sm">S</a> <a href="#" class="btn btn-rounded btn-default btn-sm">T</a> <a href="#" class="btn btn-rounded btn-default btn-sm">U</a> <a href="#" class="btn btn-rounded btn-default btn-sm">V</a> <a href="#" class="btn btn-rounded btn-default btn-sm">W</a> <a href="#" class="btn btn-rounded btn-default btn-sm">X</a> <a href="#" class="btn btn-rounded btn-default btn-sm">Y</a> <a href="#" class="btn btn-rounded btn-default btn-sm">Z</a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              
                
            
          </div><!--end sub-page-content-->

	<div class="solid-row"></div>
@stop


@section('end_scripts')
	<script type="text/javascript">

	</script>
@stop