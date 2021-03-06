@extends('layouts.admin')

@section('title')
    <title>KPJ Advisor Series :: Edit Consultant</title>
@stop

<?php
    $profile_status = $doctor->status;
    $profile_consultant_name = $doctor->name;
    $profile_service = $doctor->service_id;
    $profile_degrees = $doctor->degrees;
    $profile_experience = $doctor->experience;
    // $profile_consultant_image = $doctor->image;
    $profile_details = $doctor->details;
    $profile_clinic_hours = $doctor->clinic_hours;
    $profile_consultant_type = $doctor->type;
    $profile_consultant_image_alt_text = $doctor->image_alt_text;
    $profile_enable_link = $doctor->enable_link;
?>

@section('content')
    <!--BEGIN PAGE WRAPPER-->
    <div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->

        <div class="page-header-breadcrumb">
            <div class="page-heading hidden-xs">
                <h1 class="page-title">Find Doctor</h1>
            </div>

            <!-- InstanceBeginEditable name="EditRegion1" -->
            <ol class="breadcrumb page-breadcrumb">
                <li><i class="fa fa-home"></i>&nbsp;<a href="/admin">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
                <li>Find Doctor &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
                <li><a href="/admin/find_doctor_list">Consultants Listing</a> &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
                <li class="active">Consultant - Edit</li>
            </ol>
            <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
        <div class="page-content">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Consultant <i class="fa fa-angle-right"></i> Edit</h2>
                    <div class="clearfix"></div>
                    @include('common.alerts')
                    <div class="clearfix"></div>
                    <p></p>
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="#profile" data-toggle="tab">Consultant Profile</a></li>
                        <li><a href="#schedule" id="getshedule" data-toggle="tab">Consultant Schedule</a></li>
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

                                            <form class="form-horizontal" method="post" action="/admin/find_doctor/{{$doctor->id}}/edit" id="profile_form" enctype="multipart/form-data">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Status <span class="text-red">*</span></label>
                                                    <div class="col-md-6">
                                                        <div data-on="success" data-off="primary" class="make-switch">
                                                            <input type="checkbox" name="profile_status"
                                                                   @if($profile_status == 1)
                                                                   checked="checked"
                                                                    @endif
                                                            />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Consultant Name <span class='require'>*</span></label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="eg. Dr Mohd Yani Bin Bahari" name="profile_consultant_name" value="{{$profile_consultant_name}}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Consultant Type <span class='require'>*</span></label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="eg. Resident Consultant" value="{{$profile_consultant_type}}" name="profile_consultant_type">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Specialty <span class='require'>*</span></label>
                                                    note to programmer: the specialty list should fetch the data from the "Services &amp; Procedures" page.
                                                    <div class="col-md-6">
                                                        <select class="form-control" name="profile_service">
                                                            <option value="">- Select Specialty -</option>
                                                            @foreach($services as $service)
                                                                <option value="{{ $service->id }}" {{($profile_service == $service->id?'selected="selected"':'')}}>{{ strip_tags($service->title) }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Upload Consultant Image <span class='require'>*</span></label>
                                                    <div class="col-md-9">
                                                        <div class="text-15px margin-top-10px"> <img src="{{asset($doctor->image)}}" alt="{{$profile_consultant_name}}" class="img-responsive"><br/>
                                                            <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-banner-image" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                                            <div class="clearfix"></div>
                                                            <br/>

                                                            <input id="exampleInputFile2" name="profile_consultant_image" type="file"/>
                                                            <br/>
                                                            <span class="help-block">(Image dimension: 726 x 552 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Consultant Image Alt Text</label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="eg. Dr Mohd Yani Bin Bahari" value="{{ $profile_consultant_image_alt_text }}" name="profile_consultant_image_alt_text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Degrees</label>
                                                    <div class="col-md-6">
                                                        <textarea name="profile_degrees" class="form-control" placeholder="eg. MBBS (Mal), M.Med (Anaes) (UKM)">{{$profile_degrees}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Experience</label>
                                                    <div class="col-md-6">
                                                        <textarea name="profile_experience" class="form-control" placeholder="eg. -">{{$profile_experience}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Details</label>
                                                    <div class="col-md-6">
                                                        <textarea name="profile_details" class="form-control" placeholder="eg. -">{{$profile_details}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Clinic Hours</label>
                                                    <div class="col-md-6">
                                                        <textarea name="profile_clinic_hours" class="form-control" placeholder="eg. Monday - Friday: 9.30am-5.00pm">{{$profile_clinic_hours}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Enable Link</label>

                                                    <div class="col-md-6">
                                                        <div class="xss-margin"></div>
                                                        <div class="radio-list">
                                                            <label><input name="profile_enable_link" id="inlineCheckbox1" type="radio" value="none" {{($profile_enable_link == 'none'?'checked="checked"':'')}} />&nbsp; None</label>
                                                            <label><input name="profile_enable_link" id="inlineCheckbox2" type="radio" value="appointment" {{($profile_enable_link == 'appointment'?'checked="checked"':'')}} />&nbsp; Get Appointment</label>

                                                        </div>
                                                    </div>
                                                </div>

                                                <input type="hidden" name="_submitted" value="1" />

                                            </form>
                                            <!--Modal delete banner image start-->
                                            <div id="modal-delete-banner-image" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                            <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this consultant image? </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p><img src="{{asset($doctor->image)}}" alt="{{$doctor->name}}" class="img-responsive"></p>
                                                            <div class="form-actions">
                                                                <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red" id="btn-delete-image" z="{{$doctor->id}}">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- modal delete image end -->


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
                                    <div class="row" id="details">

                                        <div class="col-md-12">

                                            <?php
                                            $firstday = (int) date("N", strtotime(sprintf("%s-%s-01",$year,$month)));
                                            $lastday = (int) date("t", strtotime(sprintf("%s-%s-01",$year,$month)));
                                            $month_name = date("F", strtotime(sprintf("%s-%s-01",$year,$month)));

                                            if($month == '12'){
                                                $next_month = '01';
                                                $next_month_year = $year+1;
                                            } else {
                                                $next_month = sprintf("%02d",$month+1);
                                                $next_month_year = $year;
                                            }

                                            if($month == '01'){
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
                                                <table class="table1">
                                                    <thead>
                                                    <tr>
                                                        <td><a href="?m={{$prev_month}}&y={{$prev_month_year}}#schedule" class="arrows" data-toggle="tooltip" data-placement="top" title="Last Month"><h2><i class="fa fa-angle-double-left"></i></h2></a></td>
                                                        <td colspan="5"><h2>{{$month_name.' '.$year}}</h2></td>
                                                        <td><a href="?m={{$next_month}}&y={{$next_month_year}}#schedule" class="arrows" data-toggle="tooltip" data-placement="top" title="Next Month"><h2><i class="fa fa-angle-double-right"></i></h2></a></td>
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
                                                    <tr>
                                                        <?php


                                                        ?>
                                                        @for($i=0;$i<$firstday;$i++)

                                                            <?php
                                                            $sawsan[] = $lastday;
                                                            $sawsan2 = count($sawsan);
                                                            if($sawsan2 == 7){
                                                            //$style = 'style="display:none !important"';
                                                            echo'<style>
                                                    td.passdate.nextmonth{
                                                    display:none!important;
                                                    }
                                                    </style>';

                                                            }
                                                            ?>


                                                            <td width="14%" class="passdate nextmonth"><div class="margin-bottom-10">
                                                                </div><?php

                                                                echo $number_of_days_in_prev_month - $firstday + $i + 1;

                                                                ?></td>


                                                            <?php

                                                            ?>

                                                            <?php $day++?>
                                                        @endfor

                                                        <?php

                                                        ?>
                                                        <?php for($d = 1; $d <= $lastday; $d++,$day++ ):?>
                                                        <?php
                                                        $appointmentdate = sprintf("%s-%02d",date('Y-m', mktime(0, 0, 0, $month, 1, $year)),$d);

                                                        $strdate = sprintf("%02d %s",$d,date('F, Y'));
                                                        $strdate = sprintf("%02d %s",$d,date('F, Y'));
                                                        $currentDayName = date('l', strtotime($appointmentdate));
                                                        $currentMonthName = date('F', strtotime($appointmentdate));
                                                        $currentYearName = date('Y', strtotime($appointmentdate));
                                                        switch($day){
                                                        case $day%7 == 1: $dayname = 'Sunday'; break;
                                                        case $day%7 == 2: $dayname = 'Monday'; break;
                                                        case $day%7 == 3: $dayname = 'Tuesday'; break;
                                                        case $day%7 == 4: $dayname = 'Wednesday'; break;
                                                        case $day%7 == 5: $dayname = 'Thursday'; break;
                                                        case $day%7 == 6: $dayname = 'Friday'; break;
                                                        case $day%7 == 7: $dayname = 'Saturday'; break;
                                                        default: $dayname = ''; break;
                                                        }
                                                        $arrDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                                                        $arrMonths = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                                                        // for ($i = 0; $i < 11; $i++) {
                                                        //     $timestamp = mktime(0, 0, 0, date('n') - $i, 1);
                                                        //     $arrMonths[] = date('F', $timestamp);
                                                        // }
                                                        $current_year = date('Y');
                                                        $range = range($current_year, $current_year+50);
                                                        $arrYears = array_combine($range, $range);
                                                        $today = sprintf("%s-%02d-%02d", $year, $month, $d);
                                                        $date = new DateTime($today);
                                                        $date->setTime(0,0,0);
                                                        $date->add(new DateInterval('P1D'));
        
                                                        $diff = $date->getTimestamp() - time();
                                                        $booked_count = \App\Appointment::where('status',1)->where('doctor_id',$iddoc)->where('appointment_date', $today)->count();
                                                        $dayStatus = \App\Schedule::where('doctor_id',$iddoc)->where('date',$appointmentdate)->first();
                                                        $scheduleData = \App\Schedule::where('doctor_id',$iddoc)->orderBy('id', 'asc')->get();
                                                        $status = $dayStatus !== null ? $dayStatus->status : "Available";
                                                        $booked_str = $booked_count ? "Booked: $booked_count" : "Available";
                                                        $scheduleId = 0;
                                                        if (!empty($scheduleData)) {
                                                            foreach($scheduleData as $scheduleRow) {
                                                                $scheduleId = $scheduleRow->id;
                                                                $scheduleBulkValues = (isset($scheduleRow->bulk_values))? $scheduleRow->bulk_values : '';
                                                                $scheduleBulkValues = str_replace(',', ';', $scheduleBulkValues);
                                                                $scheduleBulkValue = explode(';', $scheduleBulkValues);
                                                            if(!empty($scheduleBulkValue)) {
                                                                if ($scheduleRow->bulk_option == 0) {
                                                                    $selectedDays = $selectedMonth = [];
                                                                foreach ($scheduleBulkValue as $scheduleBulk) {
                                                                    if (in_array($scheduleBulk, $arrDays)) {
                                                                            $selectedDays[] = $scheduleBulk;
                                                                    }
                                                                    if (in_array($scheduleBulk, $arrMonths)) {
                                                                        $selectedMonth[] = $scheduleBulk;
                                                                    } else if($scheduleBulk == 'Every Month') {
                                                                        $selectedMonth = $arrMonths;
                                                                    }
                                                                }
                                                            if (in_array($currentDayName, $selectedDays) && in_array($currentMonthName, $selectedMonth)) {
                                                                        $status = $scheduleRow->status;
                                                            }

                                                        } else {
                                                                $selectedDays = $selectedYears = [];
                                                                foreach ($scheduleBulkValue as $scheduleBulk) {
                                                                    if (in_array($scheduleBulk, $arrDays)) {
                                                                        $selectedDays[] = $scheduleBulk;
                                                                }
                                                                if (in_array($scheduleBulk, $arrYears)) {
                                                                    $selectedYears[] = $scheduleBulk;
                                                                 } else if($scheduleBulk == 'Every Year') {
                                                                    $selectedYears = $arrYears;
                                                                 }
                                                                }
                                                                if (in_array($currentDayName, $selectedDays) && in_array($currentYearName, $selectedYears)) {
                                                                        $status = $scheduleRow->status;
                                                                }
                                                              }
                                                             }
                                                            }
                                                        }
                                                        ?>
                                                        @if ($diff > 0)
                                                        @if($status == "Available")
                                                            <td width="14%">
                                                                <a class="calend open_edit_popup" id="edit_{!! $d !!}_{!! $iddoc !!}_{!! $scheduleId !!}" href="javascript: void(0)"   data-strdate="{{$strdate}}" data-dayname="{{$dayname}}" data-appointmentdate="{{$appointmentdate}}"><span class="date-numer" id="{{$d}}" data-toggle="tooltip" data-placement="top" title="Available!">{{$d}}</span><br/></a>
                                                                <br/> {{$status}}</td>
                                                        @else
                                                            <td width="14%" class="passdate">
                                                                {{--<span class=" margin-bottom-20 date-numer" id="{{$d}}" data-toggle="tooltip" data-placement="top" title="{{$status}}">{{$d}}</span>--}}
                                                                <a class="calend open_edit_popup" id="edit_{!! $d !!}_{!! $iddoc !!}_{!! $scheduleId !!}" href="javascript: void(0)"   data-strdate="{{$strdate}}" data-dayname="{{$dayname}}" data-appointmentdate="{{$appointmentdate}}"><span class=" margin-bottom-20 date-numer" id="{{$d}}" data-toggle="tooltip" data-placement="top" title="{{$status}}">{{$d}}</span></a>
                                                                <span class="text-danger"><br/>{{$status}}</span><br/>
                                                            </td>
                                                        @endif
                                                        @else
												            <td width="14%" class="passdate nextmonth"><div class="margin-bottom-10"></div>{{ $d }}</td>
											            @endif
                                                        @if($day%7==0)
                                                    </tr>
                                                    <tr>
                                                        @endif
                                                        <?php endfor;?>

                                                    </tr>
                                                    </tbody>

                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="book-calendar table-responsive">
                                                <table id="calen" class="datatable-exception">

                                                </table>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- end row -->
                                    <?php $total = 0; ?>
                                    <!--Modal edit schedule start-->
                                    <div id="modal-edit-schedule" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                    </div>
                                    {{--<div id='modaledit'></div>--}}
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
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                            <tr>
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
                                            @foreach($doctor->appointments as $index => $row)
                                                <tr>
                                                    <td>{{ ($index+1) }}</td>
                                                    <td><span class="label label-sm label-success">Booked</span></td>
                                                    <td>{{ $row->patient ? $row->patient->mrn_number : '-' }}</td>
                                                    <td>{{ $row->patient ? $row->patient->first_name.' '.$row->patient->last_name : '-' }}</td>
                                                    <td>{{ $row->doctor ? $row->doctor->name : '-' }}</td>
                                                    <td>{{ $row->doctor ? $row->doctor->degrees : '-' }}</td>
                                                    <td>{!! date('d F, Y', strtotime($row->appointment_date)) .' ('.$row->appointment_day.')<br>'.$row->appointment_time !!}</td>
                                                    <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-appointment" data-toggle="modal" title="Edit"><span class="label label-sm label-info"><i class="fa fa-eye"></i></span></a>

                                                    {{-- <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-1" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a> --}}
                                                    <!--Modal Edit appointment start-->
                                                        <div id="modal-edit-appointment" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                            <div class="modal-dialog modal-wide-width">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                        <h4 id="modal-login-label3" class="modal-title">See Appointment Details</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form">
                                                                            <form class="form-horizontal">
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Patient MRN No.</label>
                                                                                    <div class="col-md-6">
                                                                                        {{ $row->patient ? $row->patient->mrn_number : '-' }}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Patient Name </label>
                                                                                    <div class="col-md-6">
                                                                                        <p class="form-control-static">{{ $row->patient ? $row->patient->first_name.' '.$row->patient->last_name : '-' }}</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Apppointment Date</label>
                                                                                    <div class="col-md-4">
                                                                                        {{ date('d F, Y', strtotime($row->appointment_date)) .' ('.$row->appointment_day.')' }}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Appointment Time <span class='require'>*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        {{ $row->appointment_time }}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Specialty</label>
                                                                                    <div class="col-md-6">
                                                                                        {{ $row->doctor ? $row->doctor->degrees : '-' }}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Consultant Name</label>
                                                                                    <div class="col-md-6">
                                                                                        {{ $row->doctor ? $row->doctor->name : '-' }}
                                                                                    </div>
                                                                                </div>


                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Date of Birth </label>
                                                                                    <div class="col-md-4">
                                                                                        <div class="input-group">
                                                                                            <p class="form-control-static">
                                                                                                {{ $row->patient && $row->patient->date_of_birth ? date("Y-m-d", strtotime($row->patient->date_of_birth)) : "-" }}
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Gender</label>
                                                                                    <div class="col-md-6">
                                                                                        <p class="form-control-static">
                                                                                            {{ $row->patient && $row->patient->gender ? $row->patient->gender : "-" }}
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">NRIC/Passport No.</label>
                                                                                    <div class="col-md-6">
                                                                                        <p class="form-control-static">{{ $row->patient && $row->patient->passport_number ? $row->patient->passport_number : "-" }}</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Contact No. </label>
                                                                                    <div class="col-md-6">
                                                                                        <p class="form-control-static">
                                                                                            {{ $row->patient && $row->patient->contact_number ? $row->patient->contact_number : "-" }}
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Address</label>
                                                                                    <div class="col-md-6">
                                                                                        <p class="form-control-static">
                                                                                            {{ $row->patient && $row->patient->address ? $row->patient->address : "-" }}
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">City </label>
                                                                                    <div class="col-md-6">
                                                                                        <p class="form-control-static">
                                                                                            {{ $row->patient && $row->patient->city ? $row->patient->city : "-" }}
                                                                                        </p>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Postal Code</label>
                                                                                    <div class="col-md-6">
                                                                                        <p class="form-control-static">
                                                                                            {{ $row->patient && $row->patient->postal_code ? $row->patient->postal_code : "-" }}
                                                                                        </p>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">State </label>
                                                                                    <div class="col-md-6">
                                                                                        <p class="form-control-static">{{ $row->patient && $row->patient->state ? $row->patient->state : "-" }}</p>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Country </label>
                                                                                    <div class="col-md-6">
                                                                                        <p class="form-control-static">
                                                                                            {{ $row->patient && $row->patient->country_id ? $row->patient->country->name : "-" }}
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Email (Login ID)</label>
                                                                                    <div class="col-md-6">
                                                                                        <p class="form-control-static">
                                                                                            {{ $row->patient ? $row->patient->user["email"] : "-" }}
                                                                                        </p>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="form-actions">
                                                                                    <div class="col-md-offset-5 col-md-8"><a href="#" data-dismiss="modal" class="btn btn-info">Close &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
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
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td colspan="9"></td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
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
                                                                        <input id="label5" placeholder="Password" class="form-control" value="-^L^wuLQ9{S\"/>
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
                                                                <label for="label" class="control-label col-md-3"></label>
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
                                                                        <input id="label2" type="password" placeholder="Confirm Password" class="form-control"/>
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
                                    <div class="clearfix"></div>
                                    <br/>
                                    <br/>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                            <tr>
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
                                            @foreach(\App\Patient::all() as $index => $patient)
                                                <tr>
                                                    <td>{{ ($index+1) }}</td>
                                                    <td>
                                                        @if($patient->status)
                                                            <span class="label label-sm label-success">Active</span></td>
                                                    @else
                                                        <span class="label label-sm label-success">Inactive</span></td>
                                                    @endif
                                                    <td>{{ $patient->mrn_number }}</td>
                                                    <td>{{ $patient->first_name .' '.$patient->last_name }}</td>
                                                    <td>{{ $patient->contact_number }}</td>
                                                    <td>{{ $patient->user["email"] }}</td>
                                                    <td>
                                                        <div class="text-center"><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-patient" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a>

                                                            {{-- <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-2" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a> --}}
                                                        </div>
                                                        <!--Modal Edit patient start-->
                                                        <div id="modal-edit-patient" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                            <div class="modal-dialog modal-wide-width">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                        <h4 id="modal-login-label3" class="modal-title">Edit Patient: {{ $patient->first_name .' '.$patient->last_name }}</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form">
                                                                            <form class="form-horizontal">
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Status</label>
                                                                                    <div class="col-md-9">
                                                                                        <div data-on="success" data-off="primary" class="make-switch">
                                                                                            <input type="checkbox" value="1" {{ $patient->status ? "checked" : "" }} />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Patient MRN No. <span class='require'>*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="text" class="form-control" placeholder="eg. 0000000001" value="{{ $patient->mrn_number }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Patient Last Name <span class='require'>*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="text" class="form-control" placeholder="eg. Lim" value="{{ $patient->last_name }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Patient First Name <span class='require'>*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="text" class="form-control" placeholder="eg. Hock Hock" value="{{ $patient->first_name }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Date of Birth <span class='require'>*</span></label>
                                                                                    <div class="col-md-4">
                                                                                        <div class="input-group">
                                                                                            <input type="text" data-date-format="dd/mm/yyyy" placeholder="eg. 26/12/1994" class="datepicker-default form-control" value="{{ date("d-m-Y", strtotime($patient->date_of_birth)) }}"/>
                                                                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Gender <span class='require'>*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <select class="form-control">
                                                                                            <option>- Please select -</option>
                                                                                            <option value="male" {{ $patient->gender == 'male' ? "selected" : "" }}>Male</option>
                                                                                            <option value="female" {{ $patient->gender == 'female' ? "selected" : "" }}>Female</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">NRIC/Passport No. <span class='require'>*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="text" class="form-control" placeholder="eg. 890625-04-3445" value="{{ $patient->passport_number }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Contact No. <span class='require'>*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="text" class="form-control" placeholder="eg. +6016-123-1234" value="{{ $patient->contact_number }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Address <span class="text-red">* </span></label>
                                                                                    <div class="col-md-6">
                                                                                        <textarea class="form-control" placeholder="eg. B2-2-2, Solaris Dutamas, No. 1, Jalan Dutamas 1">{{ $patient->address }}</textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">City <span class="text-red">* </span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="text" class="form-control" value="{{ $patient->city }}">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Postal Code <span class="text-red">* </span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="text" class="form-control" value="{{ $patient->postal_code }}">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">State <span class="text-red">* </span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="text" class="form-control" value="{{ $patient->state }}">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Country <span class="text-red">* </span></label>
                                                                                    <div class="col-md-6">
                                                                                        <select name="select" class="form-control">
                                                                                            <option value="">-- Please select --</option>
                                                                                            @foreach(\App\Country::where('status',1)->get() as $country)
                                                                                                <option value="{{$country->id}}" data-calling-code="{{$country->calling_code}}" data-eu-tax="{{$country->eu_tax}}" {{ $country->id == $patient->country_id ? "selected" : "" }}>{{$country->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Email (Login ID) <span class='require'>*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="text" class="form-control" placeholder="eg. yourname@domain.com" value="{{ $patient->user["email"] }}">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-3">Password <span class="text-red">*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <div class="input-icon"><i class="fa fa-key"></i>
                                                                                            <input id="label3" placeholder="Password" class="form-control" value="-^L^wuLQ9{S\"/>
                                                                                            <span class="text-10px">(Password length should be between 6-12 characters)</span> </div>
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                        <!-- end form group -->
                                                                        <div class="clearfix"></div>
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-3">Confirm Password <span class="text-red">*</span></label>
                                                                            <div class="col-md-6">
                                                                                <div class="input-icon"><i class="fa fa-key"></i>
                                                                                    <input id="label4" type="password" placeholder="Confirm Password" class="form-control"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">Newsletter Subscription</label>
                                                                            <div class="col-md-9">
                                                                                <div class="margin-top-10px">
                                                                                    <input type="checkbox" {{ $patient->newsletter_subscription ? "checked" : "" }}>
                                                                                    I would like to subscribe to KPJ Sentosa KL Specialist Hospital's newsletter and get latest news &amp; events, promotions &amp; packages. </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-actions">
                                                                            <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
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
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="8"></td>
                                    </tr>
                                    </tfoot>
                                    </table>
                                </div><!-- end table responsive -->
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

    <!--END PAGE WRAPPER-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('js/calendar.js')}}"></script>
@stop


@section('end_scripts')
    <script>
        // $("table").dataTable.destroy();

        $('#btn-delete-image').on('click', function(e){
            e.preventDefault();

            $.ajax({
                url:'/admin/doctor/' + $(this).attr('z') + '/delete-image',
                data:{},
                type:'get',
                success:function(data){
                    if(data.status == 'ok'){
                        $('#modal-delete-banner-image').modal('hide');
                        window.location.reload();
                    }
                }
            })

            console.log('img delete');
        });
    </script>

    <script type="text/javascript">
        $('.lem').removeClass('active')
        $('.lem_consultant').addClass('active')

        $(".generate_password").on("click", function () {
            var randomstring = Math.random().toString(36).substr(2,8);
            $(this).val(randomstring);
        })

    </script>
    <script>
        $(".btn_status_list").each(function () {
            initStatus($(this));
            bindAnchorClick($(this));
        });

        function initStatus(element) {
            element.find(".statusName").each(function () {
                var currentStatus = $(this).val();

                changeStatus(currentStatus, element);
            });
        }

        function changeStatus(selectedStatus, element) {
            var statusList = ['Available', 'Not Available', 'No Clinic', 'Doctor on Leave', 'Appointment Full'];

            element.find('.btn_status_selected')
                .attr('class', 'btn '+ getClassName(selectedStatus) +' btn_status_selected')
                .html(selectedStatus)
                .next()
                .attr('class', 'btn '+ getClassName(selectedStatus) +' dropdown-toggle');

            var ul = "";
            $.each(statusList, function (i,v) {
                if (selectedStatus != v) {
                    ul = ul + ("<li><a href='javascript:void(0)' data-value='"+ v +"'>"+ v +"</a></li>");
                }
            });

            element.find("ul").html(ul);
            element.find(".statusName").val(selectedStatus);

            bindAnchorClick(element);
        }

        function bindAnchorClick(element) {
            element.find("a").on('click', function () {
                changeStatus($(this).data('value'), element);
            });
        }

        function getClassName(status) {
            if (status == 'Available') return 'btn-success';
            if (status == 'Not Available') return 'btn-warning';
            if (status == 'No Clinic') return 'btn-info';
            if (status == 'Doctor on Leave') return 'btn-violet';
            if (status == 'Appointment Full') return 'btn-danger';
        }


        // Radio Bulk
        initRadio();

        function initRadio () {
                    @for($i = 0; $i < $total; $i++)
            var checked_{{ $i }} = $("input[name=bulk_{{ $i }}]:checked").val();

            if (checked_{{ $i }} == 0) {
                $(".byDaysPerMonth-{{ $i }} select").prop("disabled", false);
                $(".byDaysPerYear-{{ $i }} select").prop("disabled", true);
            } else if (checked_{{ $i }} == 1) {
                $(".byDaysPerMonth-{{ $i }} select").prop("disabled", true);
                $(".byDaysPerYear-{{ $i }} select").prop("disabled", false);
            } else {
                $(".byDaysPerMonth-{{ $i }} select").prop("disabled", true);
                $(".byDaysPerYear-{{ $i }} select").prop("disabled", true);
            }
            @endfor
        }

        @for($i = 0; $i < $total; $i++)
        $("input[name=bulk_{{ $i }}]").change(function () {
            initRadio();
        });
        @endfor

    </script>

    <script >
        $token = "{{ csrf_token() }}";
        $renderRoute = '{{ URL::route('find.doctor.edit.popup') }}';
        $(document).ready(function () {
            $(document).on("click", ".calend", function () {
                var date = $(this).data('appointmentdate');
                document.cookie = "date = " + date
                /*history.pushState({
                    id: 'homepage'
                }, 'Home | My App', "?date="+date);*/
                $("#dateschedule").val(date);
            });
        })

        $('.open_edit_popup').click(function(e) {
            e.preventDefault();
            $formData = {
                '_token': $token,
                date: $(this).attr("data-appointmentdate"),
                id: this.id
            };

            $.ajax({
                url: $renderRoute,
                type: 'POST',
                data: $formData,
                success: function (data) {
                    $('#modal-edit-schedule').html(data.view);
                    $('#modal-edit-schedule').modal('show');
                },
                error: function ($error) {
                    console.log($error);
                }
            });
        });

        var fullurl= document.URL;
        var check=fullurl.indexOf("#schedule");
        if(check != -1)
        {
            $('#getshedule').click();
        }
    </script>
@stop