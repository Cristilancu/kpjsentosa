@extends('layouts.front')

@section('title')
	<title>Make an Appointment - Step One</title>
@stop

@section('content')
	<section class="sub-page-banner2 text-center" data-stellar-background-ratio="0.3">
		<div class="overlay"></div>
		<div class="container">
			<h1 class="entry-title">Appointment</h1>
		</div>
	</section>

	<div class="page-header-breadcrumb">
		<!-- <ol class="breadcrumb page-breadcrumb text-center">
			<li><a href="/make-appointment">Make an Appointment</a>&nbsp;</li>
			@if(\Auth::check())
				@if(\Auth::user()->patient)
				<li><a href="/patient/dashboard">You are logged in as: {{\Auth::user()->patient->first_name}} {{\Auth::user()->patient->last_name}}</a></li>
				@endif
				<li><a href="/patient/logout">Logout</a></li>
			@else
				<li><a href="/patient/registration">Sign Up</a>&nbsp;</li>
				<li><a href="#" data-target="#modal-login" data-toggle="modal">Patient Login</a>&nbsp;</li>
			@endif
		</ol> -->
		<ol class="breadcrumb page-breadcrumb text-center">
			@if(\Auth::check())
			<li><a href="/patient/dashboard">Dashboard</a>&nbsp;</li>
			@endif
            <li><a href="/make-appointment">Make an Appointment</a>&nbsp;</li>
            @if(\Auth::check())
                <li><a href="/patient/dashboard">You are logged in as: {{\Auth::user()->patient->first_name}} {{\Auth::user()->patient->last_name}}</a></li>
                <li><a href="/patient/logout">Logout</a></li>
            @else
                <li><a href="/patient/registration">Sign Up</a>&nbsp;</li>
				<li><a href="#" data-target="#modal-login" data-toggle="modal">Patient Login</a>&nbsp;</li>
            @endif
        </ol>

		@include('front.loginmodel')
		<!-- Modal forgot password -->

	</div>

	<!-- Sub Page Content
	============================================= -->
	<div id="sub-page-content" class="no-padding-bottom clearfix">
		<!-- patient transfer Start
		============================================= -->
		<div class="container">
			<h2 class="light bordered main-title">Make an <span>Appointment</span></h2>

				<div class="row">

					<div class="col-md-6">
						<p><strong>Please fill up the following form to complete your appointment booking.</strong></p>
						<div class="clearfix">

							<div class="pull-right text-danger">* Mandatory field</div>
							<div class="clearfix"></div>
							<div class="height10"></div>

							<div class="form-group">
								<label class="col-md-3 control-label">Specialty: <span class="text-danger">*</span></label>
								<div class="col-md-9">

								<?php

										$services=\App\service::where('status',1)->get();

										?>
									<select id="service_id" name="service_id" class="form-control">
										<option value="">- Select -</option>



										@foreach($services as $service)
										<option value="{{$service->id}}" {{($service->id==$consultant->service_id?'selected="selected"':'')}}>{{strip_tags($service->title)}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="clearfix"></div>

							<div class="form-group">
								<label class="col-md-3 control-label">Doctor: <span class="text-danger">*</span></label>
								<div class="col-md-9">
									<select id="doctor_id" name="doctor_id" class="form-control">
										<option value="">- Select -</option>
										@foreach(\App\doctor::where('status',1)->get() as $doctor)
										<option value="{{$doctor->id}}" class="service-{{$doctor->service_id}}" {{($doctor->id==$consultant->id?'selected="selected"':'')}}>{{$doctor->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="clearfix"></div>


							<div class="clearfix margin-bottom-20"></div>

							<a href="#details" class="btn btn-danger btn-rounded" >View Consultant Schedule</a>
						</div>

					</div><!-- end col-md-6 -->

					<div class="col-md-6 padding-bottom-60 clearfix">

						<div class="doctors-img"><img src="{{asset($consultant->image)}}" width="234" alt="{{$consultant->name}}" title="">
							<ul class="list-unstyled social2">
								<li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
							</ul>
							<div class="height10"></div>

						</div>


						<div class="doctors-detail">
							<h4>{{$consultant->name}}<span>{{$consultant->type}}</span></h4>
							<p><label class="heading">Speciality</label><label class="detail">{{strip_tags($consultant->service->title)}}</label></p>
							<p><label class="heading">Degrees</label><label class="detail">{{$consultant->degrees}}</label></p>
							<p><label class="heading">Experience</label><label class="detail">{{$consultant->experience}}</label></p>
							<p><label class="heading">Details</label><label class="detail">{{$consultant->details}}</label></p>
							<p><label class="heading">Clinic Hours</label><label class="detail">{{$consultant->clinic_hours}}</label></p>
						</div>

					</div><!-- end col-md-6 -->



				</div><!-- end row -->


				<div class="row" id="details">

					<div class="col-md-12">

						<h5>{{$consultant->name}}'s Schedule</h5>
						<p>Please select your preferred date and time to book your appointment.</p>
						<?php
							$weekday = (int) date("N", strtotime(sprintf("%s-%s-01",$year,$month)));
							$days_in_month = (int) date("t", strtotime(sprintf("%s-%s-01",$year,$month)));
							$month_name = date("F", strtotime(sprintf("%s-%s-01",$year,$month)));

							if ($month == '12'){
								$next_month = '01';
								$next_month_year = $year+1;
							} else {
								$next_month = sprintf("%02d",$month+1);
								$next_month_year = $year;
							}


							if ($month == '01'){
								$prev_month = '12';
								$prev_month_year = $year-1;
							} else {
								$prev_month = sprintf("%02d",$month-1);
								$prev_month_year = $year;
							}

							$number_of_days_in_prev_month = cal_days_in_month(CAL_GREGORIAN, $prev_month, $prev_month_year);
						?>
						<hr>
						<div class="clearfix"></div>

						<div class="book-calendar table-responsive" id="calender">
							<table class="table">
								<thead>
									<tr>
										<td><a href="?m={{$prev_month}}&y={{$prev_month_year}}#calender" class="arrows" data-toggle="tooltip" data-placement="top" title="Last Month"><h2><i class="fa fa-angle-double-left"></i></h2></a></td>
										<td colspan="5"><h2>{{$month_name.' '.$year}}</h2></td>
										<td><a href="?m={{$next_month}}&y={{$next_month_year}}#calender" class="arrows" data-toggle="tooltip" data-placement="top" title="Next Month"><h2><i class="fa fa-angle-double-right"></i></h2></a></td>
									</tr>
									<tr class="days">
										<th>SUN</th>
										<th>MON</th>
										<th>TUE</th>
										<th>WED</th>
										<th>THU</th>
										<th>FRI</th>
										<th>SAT</th>
									</tr>
								</thead>
								<tbody>
									<?php $day = 1; ?>
									@if ($weekday != 7)
									<tr>

									@for($i = 0; $i < $weekday; $i++)

									<?php
									$sawsan[] = $days_in_month;
									$sawsan2 = count($sawsan);

									if ($sawsan2 == 7) {
									//$style = 'style="display:none !important"';
									echo'<style>
									td.passdate.nextmonth {
									display:none!important;
									}
									</style>';

									}
									?>


									<td width="14%" class="passdate nextmonth"><div class="margin-bottom-10">
									</div><?php

									echo $number_of_days_in_prev_month - $weekday + $i + 1;

									 ?></td>


									<?php

									?>

									<?php $day++?>
									@endfor
									@endif

									<?php

									?>
										<?php for($d = 1; $d <= $days_in_month; $d++,$day++ ):?>
											<?php
												//$appointmentdate = sprintf("%s-%02d",date('Y-m'),$d);
												$appointmentdate = $year.'-'.$month.'-'.$d;

												$strdate = sprintf("%02d %s",$d,date('F, Y',strtotime(sprintf("%s-%s-01",$year,$month))));
												//$month_name = date("F", strtotime(sprintf("%s-%s-01",$year,$month)));
												switch($day){
													case 1: $dayname = 'Sunday'; break;
													case 2: $dayname = 'Monday'; break;
													case 3: $dayname = 'Tuesday'; break;
													case 4: $dayname = 'Wednesday'; break;
													case 5: $dayname = 'Thursday'; break;
													case 6: $dayname = 'Friday'; break;
													case 7: $dayname = 'Saturday'; break;
													default: $dayname = ''; break;
												}

												$today = sprintf("%s-%02d-%02d", $year, $month, $d);

												$date = new DateTime($today);
												$date->setTime(0,0,0);
												$date->add(new DateInterval('P1D'));

												$diff = $date->getTimestamp() - time();

												$booked_count = \App\Appointment::where('status',1)->where('doctor_id',$consultant->id)->where('appointment_date', $today)->count();

												if ($diff < 0) {
													$booked_str = "Unvailable";
												} else {
													$booked_str = $booked_count ? "Booked: $booked_count" : "Available";
												}
											?>

											@if ($diff > 0)
												<td width="14%"><a href="#calender" data-toggle="modal" data-target="#modal-book" data-strdate="{{$strdate}}" data-dayname="{{$dayname}}" data-appointmentdate="{{$appointmentdate}}"><span class="date-numer" id="{{$d}}" data-toggle="tooltip" data-placement="top" title="Available">{{$d}}</span><br/></a><br/> {{$booked_str}}</td>
											@else
												<td width="14%" class="passdate nextmonth"><div class="margin-bottom-10"></div>{{ $d }}</td>
											@endif

											@if($day%7==0)
										</tr>
										<tr>
											@endif
										<?php endfor;?>
										<?php /*
										Contoh normal: <td width="14%"><a href="#" data-toggle="modal" data-target="#modal-book"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Available!">2</span><br/></a> <br/> Booked: 7</td>

										Contoh Full: <td width="14%" class="passdate"><div class="margin-bottom-10"></div>3 <div class="margin-bottom-25"></div><span class="text-danger">Appointment Full</span></td>

										Contoh no clinic: <td width="14%" class="passdate"><div class="margin-bottom-10"></div>19 <div class="margin-bottom-25"></div><span class="text-danger">No Clinic</span></td>

										Contoh on leave: <td width="14%" class="passdate"><div class="margin-bottom-10"></div>18 <div class="margin-bottom-25"></div><span class="text-danger">Doctor On Leave</span></td>
										*/?>
									</tr>
								</tbody>

							</table>
						</div>

					</div><!-- end col-md-12 -->
				</div>
				
				<!-- Modal -->
				<div class="modal fade book-an-appointment" id="modal-book" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Book an Appointment</h4>
							</div>
							<div class="modal-body">
								<form id="form-next" action="/patient/changeDate" method="post">
									<input type="hidden" name="_token" value="{{csrf_token()}}">

								<p>Please review and confirm that you would like to request the following appointment:</p>

								<div class="row">
									<div class="col-md-6">
										<i class="fa fa-calendar datetime"></i>
										<h4 id="str_date">01 November, 2017</h4>
										<h4 id="day_name">Wednesday</h4>
									</div>
									<div class="col-md-6">
										<i class="fa fa-clock-o datetime"></i>
										<div class="clearfix"></div>
										<div class="col-md-12">
											<h4>Please select a time slot:
												<div class="clearfix"></div>
												<input type="hidden" name="doctor_id" id="doctor_id" value="{{$consultant->id}}" />
												<input type="hidden" name="appointment_date" id="appointment_date" value="" />
												<input type="hidden" name="appointment_id"  value="{{$appointment->id}}" />

											<?php
													$schedules = preg_split('/\n|\r\n?/', $consultant->clinic_hours)[0];
													$schedules = strstr($schedules, ":");
													$schedules = explode(" / ", $schedules);
												?>
												@foreach($schedules as $index => $schedule)
												<input type="radio" data-index="{{ $index }}" name="schedule_id"
															 value="{{ str_replace(": ", "", $schedule) }}"
															 {{ $index == 0 ? 'checked required' : '' }} /> <div style="margin-left: 35px; margin-top: -20px; line-height: 1.42">
														{{ str_replace(": ", "", $schedule) }}</div>
												@endforeach
											</h4>

										</div>
									</div>
								</div>
								<hr>
								<div class="text-center">
									<input type="submit" class="btn btn-danger btn-rounded" style="width:20%" value="Next">
								</div>
								<div class="clearfix"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
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
		$('.lem').removeClass('active');
		$('.lem_appointment').addClass('active');


		$('#modal-book').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) ;

		  var strDate = button.data('strdate');
		  var dayName = button.data('dayname');
		  var appointmentDate = button.data('appointmentdate');
		  console.log(strDate);

		  var modal = $(this);
		  modal.find('#str_date').html(strDate);
		  modal.find('#day_name').html(dayName);
		  modal.find('#appointment_date').val(appointmentDate);
		});

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