@extends('layouts.admin')

@section('title')
  <title>KPJ Advisor Series :: Add New Doctor</title>
@stop


@section('content')
	<!--BEGIN PAGE WRAPPER-->
	<div id="page-wrapper">
		<!--BEGIN PAGE HEADER & BREADCRUMB-->
		<div class="page-header-breadcrumb">
			<div class="page-heading hidden-xs">
				<h1 class="page-title">Find Doctor</h1>
			</div>

			<!-- InstanceBeginEditable name="EditRegion1" -->
			<ol class="breadcrumb page-breadcrumb">
				<li><i class="fa fa-home"></i>&nbsp;<a href="/admin">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
				<li>Find Doctor &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
				<li><a href="/admin/find_doctor_list">Consultants Listing</a> &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
				<li class="active">Consultant - Add New</li>
			</ol>
			<!-- InstanceEndEditable -->
		</div>
		<!--END PAGE HEADER & BREADCRUMB-->

		<!--BEGIN CONTENT-->
		<!-- InstanceBeginEditable name="EditRegion2" -->
		<div class="page-content">
			<div class="row">
				<div class="col-lg-12">
					<h2>Consultant <i class="fa fa-angle-right"></i> Add New</h2>
					<div class="clearfix"></div>
					@include('common.alerts')
					<div class="clearfix"></div>
					<p></p>
					<ul id="myTab" class="nav nav-tabs">
						<li class="active"><a href="#profile" data-toggle="tab">Consultant Profile</a></li>
						<li><a href="#schedule" data-toggle="tab">Consultant Schedule</a></li>
						<li><a href="#appointments" data-toggle="tab">Appointments Listing</a></li>
						<li><a href="#patients" data-toggle="tab">Patients Listing</a></li>
					</ul>

					<div id="myTabContent" class="tab-content">

						<div id="profile" class="tab-pane fade in active">

							<div class="portlet">
								<div class="portlet-header">
									<div class="caption">Consultant Profile</div>
									<div class="tools"> <i class="fa fa-chevron-up"></i> </div>
								</div>


								<div class="portlet-body">
									<div class="row">
										<div class="col-md-12">

											<form id="profile_form" class="form-horizontal" method="post" action="/admin/find_doctor_new" enctype="multipart/form-data">
												<input type="hidden" name="_token" value="{{ csrf_token() }}" />

												<div class="form-group">
													<label class="col-md-3 control-label">Status <span class="text-red">*</span></label>
													<div class="col-md-6">
														<div data-on="success" data-off="primary" class="make-switch">
															<input type="checkbox" name="profile_status" value="on" {{(old('profile_status') == 'on'?'checked="checked"':'')}}/>
														</div>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Consultant Name <span class='require'>*</span></label>
													<div class="col-md-6">
														<input type="text" class="form-control" placeholder="eg. Dr Mohd Yani Bin Bahari" name="profile_consultant_name" value="{{old('profile_consultant_name')}}">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Consultant Type <span class='require'>*</span></label>
													<div class="col-md-6">
														<input type="text" class="form-control" placeholder="eg. Resident Consultant" name="profile_consultant_type" value="{{old('profile_consultant_type')}}">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Specialty <span class='require'>*</span></label>
													note to programmer: the specialty list should fetch the data from the "Services &amp; Procedures" page.
													<div class="col-md-6">
														<select class="form-control" name="profile_service">
															<option value="">- Please select a specialty -</option>
															@foreach($services as $service)
															<option value="{{ $service->id }}" {{(old('profile_speciality') == $service->id?'selected="selected"':'')}}>{{ strip_tags($service->title) }}</option>
															@endforeach
														</select>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Upload Consultant Image <span class='require'>*</span></label>
													<div class="col-md-6">
														<div class="xs-margin"></div>
														<input id="exampleInputFile2" type="file" name="profile_consultant_image" value="{{old('profile_consultant_image')}}" />
														<span class="help-block">(Image dimension: 726 x 552 pixels, JPEG/GIF/PNG only, Max. 500kb) </span>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Consultant Image Alt Text</label>
													<div class="col-md-6">
														<input type="text" class="form-control" placeholder="eg. Dr Mohd Yani Bin Bahari" name="profile_consultant_image_alt_text" value="{{old('profile_consultant_image_alt_text')}}">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Degrees</label>
													<div class="col-md-6">
														<textarea class="form-control" placeholder="eg. MBBS (Mal), M.Med (Anaes) (UKM)" name="profile_degrees">{{old('profile_degrees')}}</textarea>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Experience</label>
													<div class="col-md-6">
														<textarea class="form-control" placeholder="eg. -" name="profile_experience">{{old('profile_experience')}}</textarea>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Details</label>
													<div class="col-md-6">
														<textarea class="form-control" placeholder="eg. -" name="profile_details">{{old('profile_details')}}</textarea>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Clinic Hours</label>
													<div class="col-md-6">
														<textarea class="form-control" placeholder="eg. Monday - Friday: 8.30am-5pm " name="profile_clinic_hours">{{old('profile_clinic_hours')}}</textarea>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Enable Link</label>

													<div class="col-md-6">
														<div class="xss-margin"></div>
														<div class="radio-list">
															<label><input name="profile_enable_link" id="inlineCheckbox1" type="radio" value="none" {{(old('profile_enable_link')=='none'?'checked="checked"':'')}}/>&nbsp; None</label>
															<label><input name="profile_enable_link" id="inlineCheckbox2" type="radio" value="appointment" {{(old('profile_enable_link')=='appointment'?'checked="checked"':'')}}/>&nbsp; Get Appointment</label>
														</div>
													</div>
												</div>		

											</form>

										</div>
										<!-- end col-md-12 -->


									</div>
									<!-- end row -->

									<div class="clearfix"></div>
								</div>
								<!-- end portlet body -->

								<div class="form-actions">
									<div class="col-md-offset-5 col-md-7"> <a href="javascript:document.getElementById('profile_form').submit();" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="/admin/find_doctor_list" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
								</div>
							</div>
							<!-- end portlet -->
							<!-- end consultant profile -->

						</div>
						<!-- end tab consultant profile -->


						<div id="schedule" class="tab-pane fade">

							<div class="portlet">

								<div class="portlet-header">
									<div class="caption">Consultant Schedule</div>
									<div class="tools"> <i class="fa fa-chevron-up"></i> </div>
								</div>

								<div class="portlet-body">
									<div class="row">

										<div class="col-md-12">
											<div class="book-calendar table-responsive">
												<table class="table">
													<thead>
														<tr>
															<td><a href="#" class="arrows" data-toggle="tooltip" data-placement="top" title="Last Month"><h2><i class="fa fa-angle-double-left"></i></h2></a></td>
															<td colspan="5"><h2>November 2017</h2></td>
															<td><a href="#" class="arrows" data-toggle="tooltip" data-placement="top" title="Next Month"><h2><i class="fa fa-angle-double-right"></i></h2></a></td>
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
														<tr>
															<td width="14%" class="passdate nextmonth"><div class="margin-bottom-10"></div>29</td>
															<td width="14%" class="passdate nextmonth"><div class="margin-bottom-10"></div>30</td>
															<td width="14%" class="passdate nextmonth"><div class="margin-bottom-10"></div>31</td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">1</span><br/></a><br/><span class="text-success"> Booked: 0</span></td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">2</span><br/></a><br/><span class="text-success"> Booked: 0</span></td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">3</span><br/></a><br/><span class="text-success"> Booked: 0</span></td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">4</span><br/></a><br/> Booked: 0</td>
														</tr> 
														<tr>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">5</span><br/></a><br/><span class="text-success"> Booked: 0</span></td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">6</span><br/></a><br/> Booked: 0</td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">7</span><br/></a><br/> Booked: 0</td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">8</span><br/></a><br/> Booked: 0</td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">9</span><br/></a><br/> Booked: 0</td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">10</span><br/></a><br/> Booked: 0</td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">11</span><br/></a><br/> Booked: 0</td>
														</tr>
														<tr>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">12</span><br/></a><br/><span class="text-success"> Booked: 0</span></td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">13</span><br/></a><br/><span class="text-success"> Booked: 0</span></td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">14</span><br/></a><br/><span class="text-success"> Booked: 0</span></td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">15</span><br/></a><br/><span class="text-success"> Booked: 0</span></td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">16</span><br/></a><br/><span class="text-success"> Booked: 0</span></td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">17</span><br/></a><br/><span class="text-success"> Booked: 0</span></td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">18</span><br/></a><br/><span class="text-success"> Booked: 0</span></td>
														</tr>
														<tr>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">19</span><br/></a><br/><span class="text-success"> Booked: 0</span></td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">20</span><br/></a><br/> Booked: 0</td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">21</span><br/></a><br/> Booked: 0</td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">22</span><br/></a><br/> Booked: 0</td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">23</span><br/></a><br/> Booked: 0</td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">24</span><br/></a><br/> Booked: 0</td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">25</span><br/></a><br/> Booked: 0</td>
														</tr>
														<tr>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">26</span><br/></a><br/><span class="text-success"> Booked: 0</span></td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">27</span><br/></a><br/> Booked: 0</td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">28</span><br/></a><br/> Booked: 0</td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">29</span><br/></a><br/> Booked: 0</td>
															<td width="14%"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">30</span><br/></a><br/> Booked: 0</td>
															<td width="14%" class="nextmonth"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">1</span><br/></a><br/> <span class="text-success">Booked: 0</span></td>
															<td width="14%" class="nextmonth"><a href="#" data-toggle="modal" data-target="#modal-add-schedule"><span class="date-numer" id="2" data-toggle="tooltip" data-placement="top" title="Add Schedule">2</span><br/></a><br/> <span class="text-success">Booked: 0</span></td>
														</tr>
													</tbody>

												</table>
											</div>
										</div>

									</div>
									<!-- end row -->

									<!--Modal add schedule start-->
									<div id="modal-add-schedule" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
										<div class="modal-dialog modal-wide-width">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
													<h4 id="modal-login-label3" class="modal-title">Add Consultant Schedule</h4>
												</div>

												<div class="modal-body">
													<div class="form">
														<form class="form-horizontal">
															<div class="form-group">
																<label class="col-md-3 control-label">Status </label>
																<div class="col-md-9">
																	<div class="btn-group">
																		<button type="button" class="btn btn-success">Available!</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Appointment Full</a></li>
																			<li><a href="#">Not Available</a></li>
																			<li><a href="#">No Clinic</a></li>
																			<li><a href="#">Doctor On Leave</a></li>
																		</ul>  
																	</div>

																	<div class="btn-group">
																		<button type="button" class="btn btn-danger">Appointment Full</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-danger dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Available!</a></li>
																			<li><a href="#">Not Available</a></li>
																			<li><a href="#">No Clinic</a></li>
																			<li><a href="#">Doctor On Leave</a></li>
																		</ul>  
																	</div>

																	<div class="btn-group">
																		<button type="button" class="btn btn-warning">Not Available</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-warning dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Available!</a></li>
																			<li><a href="#">Appointment Full</a></li>
																			<li><a href="#">No Clinic</a></li>
																			<li><a href="#">Doctor On Leave</a></li>
																		</ul>  
																	</div>

																	<div class="btn-group">
																		<button type="button" class="btn btn-info">No Clinic</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Available!</a></li>
																			<li><a href="#">Appointment Full</a></li>
																			<li><a href="#">Not Available</a></li>
																			<li><a href="#">Doctor On Leave</a></li>
																		</ul>  
																	</div>

																	<div class="btn-group">
																		<button type="button" class="btn btn-violet">Doctor On Leave</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-violet dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Available!</a></li>
																			<li><a href="#">Appointment Full</a></li>
																			<li><a href="#">Not Available</a></li>
																			<li><a href="#">No Clinic</a></li>
																		</ul>  
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">Appointment Time </label>
																<div class="col-md-6">
																	<div class="input-group bootstrap-timepicker"><input type="text" name="start" class="timepicker-default form-control" placeholder="eg. 9.00am"/><span class="input-group-addon">to</span><input type="text" name="end" class="timepicker-default form-control" placeholder="eg. 1.00pm"/></div>
																	<div class="margin-top-10">Max Patients:</div> 
																	<input type="text" class="form-control" placeholder="eg. 25" style="width: 25%">
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">Bulk Options </label>
																<div class="col-md-9">
																	<div class="xss-margin"></div>

																	<div class="col-md-4">
																		<label><input id="inlineCheckbox5" type="radio" value="option5" />&nbsp; By Day / Month</label>
																		<div class="clearfix"></div>
																		<span class="inline">Every
																			<select multiple="multiple" style="height: 180px" class="form-control">
																				<option>- Select -</option>
																				<option>Monday</option>
																				<option>Tuesday</option>
																				<option>Wednesday</option>
																				<option>Thursday</option>
																				<option>Friday</option>
																				<option>Saturday</option>
																				<option>Sunday</option>
																			</select>
																			of
																			<select multiple="multiple" style="height: 200px;" class="form-control">
																				<option>- Select Month -</option>
																				<option>Every Month</option>
																				<option>January</option>
																				<option>February</option>
																				<option>March</option>
																				<option>April</option>
																				<option>May</option>
																				<option>June</option>
																				<option>July</option>
																				<option>August</option>
																				<option>September</option>
																				<option>October</option>
																				<option>November</option>
																				<option>December</option>
																			</select>
																		</span>
																	</div><!-- end col-md-4 -->

																	<div class="col-md-4">
																		<label><input id="inlineCheckbox6" type="radio" value="option5"/>&nbsp; By Days / Year</label>
																		<div class="clearfix"></div>
																		<span class="inline">All
																			<select multiple="multiple" style="height: 180px;" class="form-control">
																				<option>- Select -</option>
																				<option>Mondays</option>
																				<option>Tuesdays</option>
																				<option>Wednesdays</option>
																				<option>Thursdays</option>
																				<option>Fridays</option>
																				<option>Saturdays</option>
																				<option>Sundays</option>
																			</select>
																			of
																			<select multiple="multiple" style="height: 200px;" class="form-control">
																				<option>- Select Year -</option>
																				<option>Every Year</option>
																				<option>2017</option>
																				<option>2018</option>
																				<option>2019</option>
																				<option>2020</option>
																				<option>2021</option>
																				<option>2022</option>
																				<option>2023</option>
																				<option>2024</option>
																				<option>2025</option>
																				<option>2026</option>
																				<option>2027</option>
																				<option>2028</option>
																			</select>
																		</span>
																		<div class="margin-top-10px"></div>
																	</div>
																</div>
															</div>
														
															<hr>

															<div class="form-group">
																<label class="col-md-3 control-label">Status</label>
																<div class="col-md-9">
																	<div class="btn-group">
																		<button type="button" class="btn btn-success">Available!</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Appointment Full</a></li>
																			<li><a href="#">Not Available</a></li>
																			<li><a href="#">No Clinic</a></li>
																			<li><a href="#">Doctor On Leave</a></li>
																		</ul>  
																	</div>

																	<div class="btn-group">
																		<button type="button" class="btn btn-danger">Appointment Full</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-danger dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Available!</a></li>
																			<li><a href="#">Not Available</a></li>
																			<li><a href="#">No Clinic</a></li>
																			<li><a href="#">Doctor On Leave</a></li>
																		</ul>  
																	</div>

																	<div class="btn-group">
																		<button type="button" class="btn btn-warning">Not Available</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-warning dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Available!</a></li>
																			<li><a href="#">Appointment Full</a></li>
																			<li><a href="#">No Clinic</a></li>
																			<li><a href="#">Doctor On Leave</a></li>
																		</ul>  
																	</div>

																	<div class="btn-group">
																		<button type="button" class="btn btn-info">No Clinic</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Available!</a></li>
																			<li><a href="#">Appointment Full</a></li>
																			<li><a href="#">Not Available</a></li>
																			<li><a href="#">Doctor On Leave</a></li>
																		</ul>  
																	</div>

																	<div class="btn-group">
																		<button type="button" class="btn btn-violet">Doctor On Leave</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-violet dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Available!</a></li>
																			<li><a href="#">Appointment Full</a></li>
																			<li><a href="#">Not Available</a></li>
																			<li><a href="#">No Clinic</a></li>
																		</ul>  
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">Appointment Time </label>
																<div class="col-md-6">
																	<div class="input-group bootstrap-timepicker"><input type="text" name="start" class="timepicker-default form-control" placeholder="eg. 2.30pm"/><span class="input-group-addon">to</span><input type="text" name="end" class="timepicker-default form-control" placeholder="eg. 5.00pm"/></div>
																	<div class="margin-top-10">Max Patients:</div> 
																	<input type="text" class="form-control" placeholder="eg. 25" style="width: 25%">
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">Bulk Options </label>
																<div class="col-md-9">
																	<div class="xss-margin"></div>

																	<div class="col-md-4">
																		<label><input id="inlineCheckbox7" type="radio" value="option5"/>&nbsp; By Day / Month</label>
																		<div class="clearfix"></div>
																		<span class="inline">Every
																			<select multiple="multiple" style="height: 180px" class="form-control">
																				<option>- Select -</option>
																				<option>Monday</option>
																				<option>Tuesday</option>
																				<option>Wednesday</option>
																				<option>Thursday</option>
																				<option>Friday</option>
																				<option>Saturday</option>
																				<option>Sunday</option>
																			</select>
																			of
																			<select multiple="multiple" style="height: 200px;" class="form-control">
																				<option>- Select Month -</option>
																				<option>Every Month</option>
																				<option>January</option>
																				<option>February</option>
																				<option>March</option>
																				<option>April</option>
																				<option>May</option>
																				<option>June</option>
																				<option>July</option>
																				<option>August</option>
																				<option>September</option>
																				<option>October</option>
																				<option>November</option>
																				<option>December</option>
																			</select>
																		</span>
																	</div><!-- end col-md-4 -->

																	<div class="col-md-4">
																		<label><input id="inlineCheckbox8" type="radio" value="option5"/>&nbsp; By Days / Year</label>
																		<div class="clearfix"></div>
																		<span class="inline">All
																			<select multiple="multiple" style="height: 180px;" class="form-control">
																				<option>- Select -</option>
																				<option>Mondays</option>
																				<option>Tuesdays</option>
																				<option>Wednesdays</option>
																				<option>Thursdays</option>
																				<option>Fridays</option>
																				<option>Saturdays</option>
																				<option>Sundays</option>
																			</select>
																			of
																			<select multiple="multiple" style="height: 200px;" class="form-control">
																				<option>- Select Year -</option>
																				<option>Every Year</option>
																				<option>2017</option>
																				<option>2018</option>
																				<option>2019</option>
																				<option>2020</option>
																				<option>2021</option>
																				<option>2022</option>
																				<option>2023</option>
																				<option>2024</option>
																				<option>2025</option>
																				<option>2026</option>
																				<option>2027</option>
																				<option>2028</option>
																			</select>
																		</span>
																		<div class="margin-top-10px"></div>
																	</div>

																</div>
															</div>

															<hr>

															<div class="form-group">
																<label class="col-md-3 control-label">Status </label>
																<div class="col-md-9">
																	<div class="btn-group">
																		<button type="button" class="btn btn-success">Available!</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Appointment Full</a></li>
																			<li><a href="#">Not Available</a></li>
																			<li><a href="#">No Clinic</a></li>
																			<li><a href="#">Doctor On Leave</a></li>
																		</ul>  
																	</div>

																	<div class="btn-group">
																		<button type="button" class="btn btn-danger">Appointment Full</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-danger dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Available!</a></li>
																			<li><a href="#">Not Available</a></li>
																			<li><a href="#">No Clinic</a></li>
																			<li><a href="#">Doctor On Leave</a></li>
																		</ul>  
																	</div>

																	<div class="btn-group">
																		<button type="button" class="btn btn-warning">Not Available</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-warning dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Available!</a></li>
																			<li><a href="#">Appointment Full</a></li>
																			<li><a href="#">No Clinic</a></li>
																			<li><a href="#">Doctor On Leave</a></li>
																		</ul>  
																	</div>

																	<div class="btn-group">
																		<button type="button" class="btn btn-info">No Clinic</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Available!</a></li>
																			<li><a href="#">Appointment Full</a></li>
																			<li><a href="#">Not Available</a></li>
																			<li><a href="#">Doctor On Leave</a></li>
																		</ul>  
																	</div>

																	<div class="btn-group">
																		<button type="button" class="btn btn-violet">Doctor On Leave</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-violet dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Available!</a></li>
																			<li><a href="#">Appointment Full</a></li>
																			<li><a href="#">Not Available</a></li>
																			<li><a href="#">No Clinic</a></li>
																		</ul>  
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">Appointment Time </label>
																<div class="col-md-6">
																	<div class="input-group bootstrap-timepicker"><input type="text" name="start" class="timepicker-default form-control" placeholder="eg. 9.30am"/><span class="input-group-addon">to</span><input type="text" name="end" class="timepicker-default form-control" placeholder="eg. 1.00pm"/></div>
																	<div class="margin-top-10">Max Patients:</div> 
																	<input type="text" class="form-control" placeholder="eg. 25" style="width: 25%">
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">Bulk Options </label>
																<div class="col-md-9">
																	<div class="xss-margin"></div>

																	<div class="col-md-4">
																		<label><input id="inlineCheckbox9" type="radio" value="option5"/>&nbsp; By Day / Month</label>
																		<div class="clearfix"></div>
																		<span class="inline">Every
																			<select multiple="multiple" style="height: 180px" class="form-control">
																				<option>- Select -</option>
																				<option>Monday</option>
																				<option>Tuesday</option>
																				<option>Wednesday</option>
																				<option>Thursday</option>
																				<option>Friday</option>
																				<option>Saturday</option>
																				<option>Sunday</option>
																			</select>
																			of
																			<select multiple="multiple" style="height: 200px;" class="form-control">
																				<option>- Select Month -</option>
																				<option>Every Month</option>
																				<option>January</option>
																				<option>February</option>
																				<option>March</option>
																				<option>April</option>
																				<option>May</option>
																				<option>June</option>
																				<option>July</option>
																				<option>August</option>
																				<option>September</option>
																				<option>October</option>
																				<option>November</option>
																				<option>December</option>
																			</select>
																		</span>
																	</div><!-- end col-md-4 -->

																	<div class="col-md-4">
																		<label><input id="inlineCheckbox10" type="radio" value="option5"/>&nbsp; By Days / Year</label>
																		<div class="clearfix"></div>
																		<span class="inline">All
																			<select multiple="multiple" style="height: 180px;" class="form-control">
																				<option>- Select -</option>
																				<option>Mondays</option>
																				<option>Tuesdays</option>
																				<option>Wednesdays</option>
																				<option>Thursdays</option>
																				<option>Fridays</option>
																				<option>Saturdays</option>
																				<option>Sundays</option>
																			</select>
																			of
																			<select multiple="multiple" style="height: 200px;" class="form-control">
																				<option>- Select Year -</option>
																				<option>Every Year</option>
																				<option>2017</option>
																				<option>2018</option>
																				<option>2019</option>
																				<option>2020</option>
																				<option>2021</option>
																				<option>2022</option>
																				<option>2023</option>
																				<option>2024</option>
																				<option>2025</option>
																				<option>2026</option>
																				<option>2027</option>
																				<option>2028</option>
																			</select>
																		</span>
																		<div class="margin-top-10px"></div>
																	</div>
																</div>
															</div>
															<hr>

															<div class="form-group">
																<label class="col-md-3 control-label"></label>
																<div class="col-md-9">
																	<a href="#" class="btn btn-dark">Add More Time Slot &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
																</div>
															</div>
															<hr>

															<div class="form-group">
																<label class="col-md-3 control-label">Status</label>
																<div class="col-md-9">
																	<div class="btn-group">
																		<button type="button" class="btn btn-info">No Clinic</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Available!</a></li>
																			<li><a href="#">Appointment Full</a></li>
																			<li><a href="#">Not Available</a></li>
																			<li><a href="#">Doctor On Leave</a></li>
																		</ul>  
																	</div>

																	<div class="btn-group">
																		<button type="button" class="btn btn-violet">Doctor On Leave</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-violet dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Available!</a></li>
																			<li><a href="#">Appointment Full</a></li>
																			<li><a href="#">Not Available</a></li>
																			<li><a href="#">No Clinic</a></li>
																		</ul>  
																	</div>

																	<div class="btn-group">
																		<button type="button" class="btn btn-success">Available!</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Appointment Full</a></li>
																			<li><a href="#">Not Available</a></li>
																			<li><a href="#">No Clinic</a></li>
																			<li><a href="#">Doctor On Leave</a></li>
																		</ul>  
																	</div>

																	<div class="btn-group">
																		<button type="button" class="btn btn-danger">Appointment Full</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-danger dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Available!</a></li>
																			<li><a href="#">Not Available</a></li>
																			<li><a href="#">No Clinic</a></li>
																			<li><a href="#">Doctor On Leave</a></li>
																		</ul>  
																	</div>

																	<div class="btn-group">
																		<button type="button" class="btn btn-warning">Not Available</button>
																		<button type="button" data-toggle="dropdown" class="btn btn-warning dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																		<ul role="menu" class="dropdown-menu">
																			<li><a href="#">Available!</a></li>
																			<li><a href="#">Appointment Full</a></li>
																			<li><a href="#">No Clinic</a></li>
																			<li><a href="#">Doctor On Leave</a></li>
																		</ul>  
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">Date</label>
																<div class="col-md-9">
																	<div class="margin-top-10px text-blue border-bottom margin-bottom-10">You may set up a single day or a range of dates for status "No Clinic" or "Doctor On Leave".</div>
																	<div class="input-group input-daterange">
																		<input type="text" name="start" class="form-control" placeholder="eg. 01 March, 2017"/>
																		<span class="input-group-addon">to</span>
																		<input type="text" name="end" class="form-control" placeholder="eg. 01 April, 2017"/>
																	</div><!-- end input daterange -->
																	<div class="xss-margin"></div>
																	<div class="input-group input-daterange">
																		<input type="text" name="start" class="form-control" placeholder="eg. 01 March, 2017"/>
																		<span class="input-group-addon">to</span>
																		<input type="text" name="end" class="form-control" placeholder="eg. 01 April, 2017"/>
																	</div><!-- end input daterange -->
																	<div class="xss-margin"></div>
																	<div class="input-group input-daterange">
																		<input type="text" name="start" class="form-control" placeholder="eg. 01 March, 2017"/>
																		<span class="input-group-addon">to</span>
																		<input type="text" name="end" class="form-control" placeholder="eg. 01 April, 2017"/>
																	</div><!-- end input daterange -->
																	<div class="xss-margin"></div>
																	<a href="#" class="btn btn-dark">Add More Date &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">Bulk Options </label>
																<div class="col-md-9">
																	<div class="xss-margin"></div>

																	<div class="col-md-4">
																		<label><input id="inlineCheckbox11" type="radio" value="option5"/>&nbsp; By Day / Month</label>
																		<div class="clearfix"></div>
																		<span class="inline">Every
																			<select multiple="multiple" style="height: 180px" class="form-control">
																				<option>- Select -</option>
																				<option>Monday</option>
																				<option>Tuesday</option>
																				<option>Wednesday</option>
																				<option>Thursday</option>
																				<option>Friday</option>
																				<option>Saturday</option>
																				<option>Sunday</option>
																			</select>
																			of
																			<select multiple="multiple" style="height: 200px;" class="form-control">
																				<option>- Select Month -</option>
																				<option>Every Month</option>
																				<option>January</option>
																				<option>February</option>
																				<option>March</option>
																				<option>April</option>
																				<option>May</option>
																				<option>June</option>
																				<option>July</option>
																				<option>August</option>
																				<option>September</option>
																				<option>October</option>
																				<option>November</option>
																				<option>December</option>
																			</select>
																		</span>
																	</div><!-- end col-md-4 -->

																	<div class="col-md-4">
																		<label><input id="inlineCheckbox12" type="radio" value="option5"/>&nbsp; By Days / Year</label>
																		<div class="clearfix"></div>
																		<span class="inline">All
																			<select multiple="multiple" style="height: 180px;" class="form-control">
																				<option>- Select -</option>
																				<option>Mondays</option>
																				<option>Tuesdays</option>
																				<option>Wednesdays</option>
																				<option>Thursdays</option>
																				<option>Fridays</option>
																				<option>Saturdays</option>
																				<option>Sundays</option>
																			</select>
																			of
																			<select multiple="multiple" style="height: 200px;" class="form-control">
																				<option>- Select Year -</option>
																				<option>Every Year</option>
																				<option>2017</option>
																				<option>2018</option>
																				<option>2019</option>
																				<option>2020</option>
																				<option>2021</option>
																				<option>2022</option>
																				<option>2023</option>
																				<option>2024</option>
																				<option>2025</option>
																				<option>2026</option>
																				<option>2027</option>
																				<option>2028</option>
																			</select>
																		</span>
																		<div class="margin-top-10px"></div>
																	</div>
																</div>
															</div>

															<hr>

															<div class="form-actions">
																<div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
															</div>

														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--END MODAL add schedule-->

									<div class="clearfix"></div>
								</div>
								<!-- end portlet body -->

							</div>
							<!-- end portlet -->
						<!-- end consultant schedule -->

						</div>
						<!-- end tab consultant schedule -->

						<div id="appointments" class="tab-pane fade">

							<div class="portlet">
								<div class="portlet-header">
									<div class="caption">Appointments Listing</div>
									<br/>
									<p class="margin-top-10px"></p>
									<!--<a href="#" data-target="#modal-add-new" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;-->
									<div class="btn-group">
										<button type="button" class="btn btn-primary">Delete</button>
										<button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu">
											<li><a href="#" data-target="#modal-delete-selected" data-toggle="modal">Delete selected item(s)</a></li>
											<li class="divider"></li>
											<li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
										</ul>
									</div>
								 
									<div class="tools"> <i class="fa fa-chevron-up"></i> </div>

									<!--Modal delete selected items start-->
									<div id="modal-delete-selected" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
													<h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
												</div>
												<div class="modal-body">
													<p><strong>#1:</strong> 0000000001 / Lim Hock Hock</p>
													<div class="form-actions">
														<div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- modal delete selected items end -->

									<!--Modal delete all items start-->
									<div id="modal-delete-all" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
													<h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
												</div>
												<div class="modal-body">
													<div class="form-actions">
														<div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- modal delete all items end -->
								</div>

								<div class="portlet-body">
									<div class="form-inline pull-left">
										<div class="form-group">
											<select name="select" class="form-control">
												<option>10</option>
												<option>20</option>
												<option selected="selected">30</option>
												<option>50</option>
												<option>100</option>
											</select>
											&nbsp;
											<label class="control-label">Records per page</label>
										</div>
									</div>

									<div class="clearfix"></div>
									<br/>
									<br/>

									<div class="table-responsive">
										<table class="table table-hover table-striped">
											<thead>
												<tr>
													<th width="1%"><input type="checkbox"/></th>
													<th>#</th>
													<th>Status</th>
													<th>MRN #</th>
													<th>Patient Name</th>
													<th>Consultant Name</th>
													<th>Specialty</th>
													<th>Appointment Date/Time</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><input type="checkbox"/></td>
													<td>1</td>
													<td><span class="label label-sm label-success">Booked</span></td>
													<td>0000000001</td>
													<td>Lim Hock Hock</td>
													<td>Dr Mohd Rapi Abd Rahman</td>
													<td>Anaesthesiology</td>
													<td>01 November, 2017 (Wednesday)<br/>9.00am - 12.30pm</td>
													<td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-appointment" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-1" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
														<!--Modal Edit appointment start-->
														<div id="modal-edit-appointment" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
															<div class="modal-dialog modal-wide-width">
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
																		<h4 id="modal-login-label3" class="modal-title">Edit Appointment</h4>
																	</div>

																	<div class="modal-body">
																		<div class="form">

																			<form class="form-horizontal">
																				<div class="form-group">
																					<label class="col-md-3 control-label">Status</label>
																					<div class="col-md-6">
																						<div class="btn-group">
																							<button type="button" class="btn btn-success">Booked</button>
																							<button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																							<ul role="menu" class="dropdown-menu">
																								<li><a href="#">Updated</a></li>
																								<li><a href="#">Cancelled</a></li>
																							</ul>  
																						</div>
																						<div class="btn-group">
																							<button type="button" class="btn btn-info">Updated</button>
																							<button type="button" data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																							<ul role="menu" class="dropdown-menu">
																								<li><a href="#">Booked</a></li>
																								<li><a href="#">Cancelled</a></li>
																							</ul>  
																						</div>
																						<div class="btn-group">
																							<button type="button" class="btn btn-danger">Cancelled</button>
																							<button type="button" data-toggle="dropdown" class="btn btn-danger dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
																							<ul role="menu" class="dropdown-menu">
																								<li><a href="#">Booked</a></li>
																								<li><a href="#">Updated</a></li>
																							</ul>  
																						</div>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Patient MRN No.</label>
																					<div class="col-md-6">
																						<input type="text" class="form-control" placeholder="eg. 0000000001" value="0000000001">
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Patient Name </label>
																					<div class="col-md-6">
																						<p class="form-control-static">Lim Hock Hock</p>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Apppointment Date <span class='require'>*</span></label>
																					<div class="col-md-4">
																						<div class="input-group">
																							<input type="text" data-date-format="dd/mm/yyyy" placeholder="eg. 01 November, 2017" class="datepicker-default form-control" value="01 November, 2017"/>
																							<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
																						</div>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Appointment Time <span class='require'>*</span></label>
																					<div class="col-md-6">
																						<div class="radio-list">
																							<input type="radio" checked="checked"> 9.00am - 12.30pm <br/>
																							<input type="radio"> 2.30pm - 5.00pm
																							note to programmer: the appointment time is dynamic and is fetched from the "Consultant Schedule" tab.
																						</div>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Specialty <span class='require'>*</span></label>
																					note to programmer: the specialty list should fetch the data from the "Services &amp; Procedures" page.
																					<div class="col-md-6">
																						<select class="form-control">
																							<option>- Please select a specialty -</option>
																							<option selected="selected">Anaesthesiology</option>
																							<option>Cardiology</option>
																							<option>List all specialty here</option>
																						</select>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Consultant Name <span class='require'>*</span></label>
																					<div class="col-md-6">
																					<select class="form-control">
																						<option>- Please select a consultant -</option>
																						<option selected="selected">Dr Mohd Yani Bin Bahari</option>
																						<option>List all consultants here</option>
																					</select>
																					note to programmer: the consultant list is fetched from the "consultants listing" page.
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Date of Birth </label>
																					<div class="col-md-4">
																						<div class="input-group">
																							<p class="form-control-static">25 June, 1980</p>
																						</div>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Gender</label>
																					<div class="col-md-6">
																						<p class="form-control-static">Male</p>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">NRIC/Passport No.</label>
																					<div class="col-md-6">
																						<p class="form-control-static">890625-04-3445</p>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Contact No. </label>
																					<div class="col-md-6">
																						<p class="form-control-static">+6016-123-1234</p>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Address</label>
																					<div class="col-md-6">
																						<p class="form-control-static">B2-2-2, Solaris Dutamas, No. 1, Jalan Dutamas 1</p>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">City </label>
																					<div class="col-md-6">
																						<p class="form-control-static">Kuala Lumpur</p>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Postal Code</label>
																					<div class="col-md-6">
																						<p class="form-control-static">50480</p>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">State </label>
																					<div class="col-md-6">
																						<p class="form-control-static">Wilayah Persekutuan</p>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Country </label>
																					<div class="col-md-6">
																						<p class="form-control-static">Malaysia</p>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Email (Login ID)</label>
																					<div class="col-md-6">
																						<p class="form-control-static">hock@webqom.com</p>
																					</div>
																				</div>

																				<div class="form-actions">
																					<div class="col-md-offset-5 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
																				</div>
																			</form>

																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!--END MODAL Edit vacancy-->

														<!--Modal delete start-->
														<div id="modal-delete-1" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
																		<h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this appointment? </h4>
																	</div>
																	<div class="modal-body">
																		<p><strong>#1:</strong> 0000000001 / Lim Hock Hock</p>
																		<div class="form-actions">
																			<div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- modal delete end -->                            
													</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="9"></td>
												</tr>
											</tfoot>
										</table>
									</div><!-- end table responsive -->

									<div class="tool-footer text-right">
										<p class="pull-left">Showing 1 to 10 of 57 entries</p>
										<ul class="pagination pagination mtm mbm">
											<li class="disabled"><a href="#">&laquo;</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li><a href="#">&raquo;</a></li>
										</ul>
									</div>

									<div class="clearfix"></div>
								</div>
							</div><!-- end portlet -->

						</div><!-- end tab appointments listing -->


						<div id="patients" class="tab-pane fade">

							<div class="portlet">
								<div class="portlet-header">
									<div class="caption">Patients Listing</div>
									<br/>
									<p class="margin-top-10px"></p>
									<a href="#" data-target="#modal-add-patient" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
									<div class="btn-group">
										<button type="button" class="btn btn-primary">Delete</button>
										<button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu">
											<li><a href="#" data-target="#modal-delete-selected" data-toggle="modal">Delete selected item(s)</a></li>
											<li class="divider"></li>
											<li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
										</ul>
									</div>
								 
									<div class="tools"> <i class="fa fa-chevron-up"></i> </div>
									<!--Modal add patient start-->
									<div id="modal-add-patient" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
										<div class="modal-dialog modal-wide-width">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
													<h4 id="modal-login-label3" class="modal-title">Add Patient</h4>
												</div>
												<div class="modal-body">
													<div class="form">
														<form class="form-horizontal">
															<div class="form-group">
																<label class="col-md-3 control-label">Status</label>
																<div class="col-md-9">
																	<div data-on="success" data-off="primary" class="make-switch">
																		<input type="checkbox" checked="checked"/>
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">Patient MRN No. <span class='require'>*</span></label>
																<div class="col-md-6">
																	<input type="text" class="form-control" placeholder="eg. 0000000001">
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">Patient Last Name <span class='require'>*</span></label>
																<div class="col-md-6">
																	<input type="text" class="form-control" placeholder="eg. Lim">
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">Patient First Name <span class='require'>*</span></label>
																<div class="col-md-6">
																	<input type="text" class="form-control" placeholder="eg. Hock Hock">
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">Date of Birth <span class='require'>*</span></label>
																<div class="col-md-4">
																	<div class="input-group">
																		<input type="text" data-date-format="dd/mm/yyyy" placeholder="eg. 25 June, 1980" class="datepicker-default form-control" />
																		<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">Gender <span class='require'>*</span></label>
																<div class="col-md-6">
																	<select class="form-control">
																		<option>- Please select -</option>
																		<option value="male">Male</option>
																		<option value="female">Female</option>
																	</select>
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">NRIC/Passport No. <span class='require'>*</span></label>
																<div class="col-md-6">
																	<input type="text" class="form-control" placeholder="eg. 890625-04-3445">
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">Contact No. <span class='require'>*</span></label>
																<div class="col-md-6">
																	<input type="text" class="form-control" placeholder="eg. +6016-123-1234">
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">Address <span class="text-red">* </span></label>
																<div class="col-md-6">
																	<textarea class="form-control" placeholder="eg. B2-2-2, Solaris Dutamas, No. 1, Jalan Dutamas 1"></textarea>
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">City <span class="text-red">* </span></label>
																<div class="col-md-6">
																	<input type="text" class="form-control">
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">Postal Code <span class="text-red">* </span></label>
																<div class="col-md-6">
																	<input type="text" class="form-control">
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">State <span class="text-red">* </span></label>
																<div class="col-md-6">
																	<input type="text" class="form-control">
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">Country <span class="text-red">* </span></label>
																<div class="col-md-6">
																	<select name="select" class="form-control">
							                                             <option value="">-- Please select --</option>
							                                             @foreach(\App\Country::where('status',1)->get() as $country)
							                                             <option value="{{$country->id}}" data-calling-code="{{$country->calling_code}}" data-eu-tax="{{$country->eu_tax}}">{{$country->name}}</option>
							                                             @endforeach
																	</select>
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">Email (Login ID) <span class='require'>*</span></label>
																<div class="col-md-6">
																	<input type="text" class="form-control" placeholder="eg. yourname@domain.com">
																</div>
															</div>

															<div class="form-group">
																<label class="control-label col-md-3">Password <span class="text-red">*</span></label>
																<div class="col-md-6">
																	<div class="input-icon"><i class="fa fa-key"></i>
																	<input id="label1" placeholder="Password" class="form-control" value="-^L^wuLQ9{S\"/>
																	<span class="text-10px">(Password length should be between 6-12 characters)</span> </div>
																	<p><a href="#">Generate Password</a></p>
																	note to prorgrammer: after click "generate password", then only display the below field and randomly generate 100% strong password in the below field.
																	<input type="text" value="-^L^wuLQ9{S\" class="form-control"/>
																	<div class="col-md-offset-4 col-md-7 margin-top-10px"> <a href="#" class="btn btn-red">Ok &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
																</div>
															</div>

															<div class="clearfix"></div>
															<div class="xs-margin"></div>

															<div class="form-group">
																<label for="label2" class="control-label col-md-3"></label>
																<div class="col-md-6">
																	<div data-hover="tooltip" data-placement="top" title="100% Strong" class="progress progress-striped active">
																		<div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;" class="progress-bar progress-bar-success"><span class="sr-only">100% Strong</span><span class="progress-completed">100% Strong</span></div>
																	</div>
																	<div data-hover="tooltip" data-placement="top" title="60% Moderate" class="progress progress-striped active">
																		<div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" class="progress-bar progress-bar-warning"><span class="sr-only">60% Moderate</span><span class="progress-completed">60% Moderate</span></div>
																	</div>
																	<div data-hover="tooltip" data-placement="top" title="10% Weak" class="progress progress-striped active">
																		<div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 10%;" class="progress-bar progress-bar-danger"><span class="sr-only">10% Weak</span><span class="progress-completed">10% Weak</span></div>
																	</div>
																</div>
																<!-- col-md-6 -->
															</div>
															<!-- end form group -->

															<div class="clearfix"></div>

															<div class="form-group">
																<label class="control-label col-md-3">Confirm Password <span class="text-red">*</span></label>
																<div class="col-md-6">
																	<div class="input-icon"><i class="fa fa-key"></i>
																	<input id="label3" type="password" placeholder="Confirm Password" class="form-control"/>
																	<span class="text-10px">(Password length should be between 6-12 characters)</span> </div>
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label">Newsletter Subscription</label>
																<div class="col-md-9">
																	<div class="margin-top-10px">
																	<input type="checkbox" checked="checked">
																	I would like to subscribe to KPJ Sentosa KL Specialist Hospital's newsletter and get latest news &amp; events, promotions &amp; packages. </div>
																</div>
															</div>

															<div class="form-actions">
																<div class="col-md-offset-5 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--END MODAL add patient-->

									<!--Modal delete selected items start-->
									<div id="modal-delete-selected" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
													<h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
												</div>
												<div class="modal-body">
													<p><strong>#1:</strong> 0000000001 / Lim Hock Hock</p>
													<div class="form-actions">
														<div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- modal delete selected items end -->

									<!--Modal delete all items start-->
									<div id="modal-delete-all" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
													<h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
												</div>
												<div class="modal-body">
													<div class="form-actions">
														<div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- modal delete all items end -->
								</div>

								<div class="portlet-body">
									<div class="form-inline pull-left">
										<div class="form-group">
											<select name="select" class="form-control">
												<option>10</option>
												<option>20</option>
												<option selected="selected">30</option>
												<option>50</option>
												<option>100</option>
											</select>
										&nbsp;
										<label class="control-label">Records per page</label>
										</div>
									</div>

									<div class="clearfix"></div>
									<br/>
									<br/>

									<div class="table-responsive">
										<table class="table table-hover table-striped">
											<thead>
												<tr>
													<th width="1%"><input type="checkbox"/></th>
													<th>#</th>
													<th>Status</th>
													<th>MRN #</th>
													<th>Patient Name</th>
													<th>Contact No</th>
													<th>Email</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><input type="checkbox"/></td>
													<td>1</td>
													<td><span class="label label-sm label-success">Active</span></td>
													<td>0000000001</td>
													<td>Lim Hock Hock</td>
													<td>+6016-123-1234</td>
													<td>hock@webqom.com</td>
													<td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-patient" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-2" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
														<!--Modal Edit patient start-->
														<div id="modal-edit-patient" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
															<div class="modal-dialog modal-wide-width">
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
																		<h4 id="modal-login-label3" class="modal-title">Edit Patient</h4>
																	</div>

																	<div class="modal-body">
																		<div class="form">

																			<form class="form-horizontal">
																				<div class="form-group">
																					<label class="col-md-3 control-label">Status</label>
																					<div class="col-md-9">
																						<div data-on="success" data-off="primary" class="make-switch">
																							<input type="checkbox" checked="checked"/>
																						</div>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Patient MRN No. <span class='require'>*</span></label>
																					<div class="col-md-6">
																						<input type="text" class="form-control" placeholder="eg. 0000000001" value="0000000001">
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Patient Last Name <span class='require'>*</span></label>
																					<div class="col-md-6">
																						<input type="text" class="form-control" placeholder="eg. Lim" value="Lim">
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Patient First Name <span class='require'>*</span></label>
																					<div class="col-md-6">
																						<input type="text" class="form-control" placeholder="eg. Hock Hock" value="Hock Hock">
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Date of Birth <span class='require'>*</span></label>
																					<div class="col-md-4">
																						<div class="input-group">
																							<input type="text" data-date-format="dd/mm/yyyy" placeholder="eg. 25 June, 1980" class="datepicker-default form-control" value="25 June 1980"/>
																							<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
																						</div>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Gender <span class='require'>*</span></label>
																					<div class="col-md-6">
																						<select class="form-control">
																							<option>- Please select -</option>
																							<option selected="selected" value="male">Male</option>
																							<option value="female">Female</option>
																						</select>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">NRIC/Passport No. <span class='require'>*</span></label>
																					<div class="col-md-6">
																						<input type="text" class="form-control" placeholder="eg. 890625-04-3445" value="890625-04-3445">
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Contact No. <span class='require'>*</span></label>
																					<div class="col-md-6">
																						<input type="text" class="form-control" placeholder="eg. +6016-123-1234" value="+6016-123-1234">
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Address <span class="text-red">* </span></label>
																					<div class="col-md-6">
																						<textarea class="form-control" placeholder="eg. B2-2-2, Solaris Dutamas, No. 1, Jalan Dutamas 1">B2-2-2, Solaris Dutamas, No. 1, Jalan Dutamas 1</textarea>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">City <span class="text-red">* </span></label>
																					<div class="col-md-6">
																						<input type="text" class="form-control" value="Kuala Lumpur">
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Postal Code <span class="text-red">* </span></label>
																					<div class="col-md-6">
																						<input type="text" class="form-control" value="50480">
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">State <span class="text-red">* </span></label>
																					<div class="col-md-6">
																						<input type="text" class="form-control" value="Wilayah Persekutuan">
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Country <span class="text-red">* </span></label>
																					<div class="col-md-6">
																						<select name="select" class="form-control">
												                                             <option value="">-- Please select --</option>
												                                             @foreach(\App\Country::where('status',1)->get() as $country)
												                                             <option value="{{$country->id}}" data-calling-code="{{$country->calling_code}}" data-eu-tax="{{$country->eu_tax}}">{{$country->name}}</option>
												                                             @endforeach
																						</select>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Email (Login ID) <span class='require'>*</span></label>
																					<div class="col-md-6">
																						<input type="text" class="form-control" placeholder="eg. yourname@domain.com" value="hock@webqom.com">
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="control-label col-md-3">Password <span class="text-red">*</span></label>
																					<div class="col-md-6">
																						<div class="input-icon"><i class="fa fa-key"></i>
																							<input id="label4" placeholder="Password" class="form-control" value="-^L^wuLQ9{S\"/>
																							<span class="text-10px">(Password length should be between 6-12 characters)</span> 
																						</div>

																						<p><a href="#">Generate Password</a></p>
																						note to prorgrammer: after click "generate password", then only display the below field and randomly generate 100% strong password in the below field.
																						<input type="text" value="-^L^wuLQ9{S\" class="form-control"/>
																						<div class="col-md-offset-4 col-md-7 margin-top-10px"> <a href="#" class="btn btn-red">Ok &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
																					</div>
																				</div>

																				<div class="clearfix"></div>
																				<div class="xs-margin"></div>

																				<div class="form-group">
																					<label for="label5" class="control-label col-md-3"></label>
																					<div class="col-md-6">
																						<div data-hover="tooltip" data-placement="top" title="100% Strong" class="progress progress-striped active">
																							<div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;" class="progress-bar progress-bar-success"><span class="sr-only">100% Strong</span><span class="progress-completed">100% Strong</span></div>
																						</div>
																						<div data-hover="tooltip" data-placement="top" title="60% Moderate" class="progress progress-striped active">
																							<div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" class="progress-bar progress-bar-warning"><span class="sr-only">60% Moderate</span><span class="progress-completed">60% Moderate</span></div>
																						</div>
																						<div data-hover="tooltip" data-placement="top" title="10% Weak" class="progress progress-striped active">
																							<div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 10%;" class="progress-bar progress-bar-danger"><span class="sr-only">10% Weak</span><span class="progress-completed">10% Weak</span></div>
																						</div>
																					</div>
																					<!-- col-md-6 -->
																				</div>
																				<!-- end form group -->

																				<div class="clearfix"></div>

																				<div class="form-group">
																					<label class="control-label col-md-3">Confirm Password <span class="text-red">*</span></label>
																					<div class="col-md-6">
																						<div class="input-icon"><i class="fa fa-key"></i>
																							<input id="label6" type="password" placeholder="Confirm Password" class="form-control"/>
																							<span class="text-10px">(Password length should be between 6-12 characters)</span>
																						</div>
																					</div>
																				</div>

																				<div class="form-group">
																					<label class="col-md-3 control-label">Newsletter Subscription</label>
																					<div class="col-md-9">
																						<div class="margin-top-10px">
																							<input type="checkbox" checked="checked">
																							I would like to subscribe to KPJ Sentosa KL Specialist Hospital's newsletter and get latest news &amp; events, promotions &amp; packages.
																						</div>
																					</div>
																				</div>

																				<div class="form-actions">
																					<div class="col-md-offset-5 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
																				</div>
																			</form>

																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!--END MODAL Edit patient-->

														<!--Modal delete start-->
														<div id="modal-delete-2" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
																		<h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this patient? </h4>
																	</div>
																	<div class="modal-body">
																		<p><strong>#1:</strong> 0000000001 / Lim Hock Hock</p>
																		<div class="form-actions">
																			<div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- modal delete end -->                            
													</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="8"></td>
												</tr>
											</tfoot>
										</table>
									</div><!-- end table responsive -->

									<div class="tool-footer text-right">
										<p class="pull-left">Showing 1 to 10 of 57 entries</p>
										<ul class="pagination pagination mtm mbm">
											<li class="disabled"><a href="#">&laquo;</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li><a href="#">&raquo;</a></li>
										</ul>
									</div>

									<div class="clearfix"></div>
								</div>
							</div><!-- end portlet -->

						</div><!-- end tab patients listing -->


					</div><!-- end tab content -->
					<div class="clearfix"></div>

				</div>
			</div>
		</div>
		<!-- InstanceEndEditable -->
		<!--END CONTENT-->

	
	<!-- </div> END PAGE WRAPPER-->
@stop


@section('end_scripts')

<script type="text/javascript">
  $('.lem').removeClass('active')
  $('.lem_consultant').addClass('active')
</script>
@stop