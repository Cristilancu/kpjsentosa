@extends('layouts.admin')

@section('title')
    <title>KPJ Advisor Series :: Listing</title>
@stop

@section('content')
    <!--BEGIN PAGE WRAPPER-->
    <div id="page-wrapper">

        <!--BEGIN PAGE HEADER & BREADCRUMB-->
        <div class="page-header-breadcrumb">
            <div class="page-heading hidden-xs">
                <h1 class="page-title">FIND DOCTOR</h1>
            </div>

            <!-- InstanceBeginEditable name="EditRegion1" -->
            <ol class="breadcrumb page-breadcrumb">
                <li><i class="fa fa-home"></i>&nbsp;<a href="/admin">Dashboard</a>&nbsp; <i
                            class="fa fa-angle-right"></i>&nbsp;
                </li>
                <li>Find Doctor &nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</li>
                <li class="active">Appointments - Listing</li>
            </ol>
            <!-- InstanceEndEditable -->
        </div>
        <!--END PAGE HEADER & BREADCRUMB-->

        <!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
        <div class="page-content">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Booked <i class="fa fa-angle-right"></i> Appointments</h2>
                    <div class="clearfix"></div>
                    @include('common.alerts')
                    <div class="clearfix"></div>
                    <p></p>

                    <div class="portlet">
                        <div class="portlet-header">
                            <div class="caption">Page Info</div>
                            <div class="clearfix"></div>
                            <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                            <div class="tools"><i class="fa fa-chevron-up"></i></div>
                        </div>
                        <div class="portlet-body"> note to programmer: the heading text and sub heading text below
                            should follow the css style 100% in front end.
                            <div contenteditable="true" id="line1">
                                @if($setting = Helper::hasSetting('appointments'))
                                    {!!$setting->line1!!}
                                @else
                                    <h1 class="entry-title">Appointments</h1>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="portlet">
                        <div class="portlet-header">
                            <div class="caption">Page Content</div>
                            <div class="clearfix"></div>
                            <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                            <div class="tools"><i class="fa fa-chevron-up"></i></div>
                        </div>
                        <div class="portlet-body">
                            <div contenteditable="true" id="line2">
                                @if($setting = Helper::hasSetting('appointments'))
                                    {!!$setting->line2!!}
                                @else
                                    <h2 class="light bordered main-title">Booked <span>Appointments</span></h2>
                                @endif
                            </div>
                        </div>
                        <!-- end portlet body -->
                        <!-- save button start -->
                        <div class="form-actions none-bg"><a href="javascript:void(0)" class="btn btn-red preview_line">Save
                                &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <a href="javascript:void(0)"
                                                                                              class="btn btn-blue save_line"
                                                                                              type="find_doctor">Save
                                &amp; Publish &nbsp;<i class="fa fa-globe"></i></a>&nbsp; <a href="javascript:void(0)"
                                                                                             class="btn btn-green">Cancel
                                &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a></div>
                        <!-- save button end -->
                    </div>

                    <div class="portlet">
                        <div class="portlet-header">
                            <div class="caption">Appointments Listing</div>
                            <br/>
                            <p class="margin-top-10px"></p>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">Delete</button>
                                <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span
                                            class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#" data-target="#modal-delete-selected" data-toggle="modal">Delete
                                            selected item(s)</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a>
                                    </li>
                                </ul>
                            </div>
                             
                            <div class="tools"><i class="fa fa-chevron-up"></i></div>

                            <!--Modal delete selected items start-->
                            <div id="modal-delete-selected" tabindex="-1" role="dialog"
                                 aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                                                &times;
                                            </button>
                                            <h4 id="modal-login-label4" class="modal-title"><a href=""><i
                                                            class="fa fa-exclamation-triangle"></i></a> Are you sure you
                                                want to delete the selected item(s)? </h4>
                                        </div>
                                        <div class="modal-body">
                                            {{-- <p><strong>#1:</strong> Dr Mohd Rapi Abd Rahman</p> --}}
                                            <div class="form-actions">
                                                <div class="col-md-offset-4 col-md-8"><a href="javascript:void(0)"
                                                                                         class="btn btn-red all_del"
                                                                                         val="appointment" take_four="yes">Yes
                                                        &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#"
                                                                                                       data-dismiss="modal"
                                                                                                       class="btn btn-green">No
                                                        &nbsp;<i class="fa fa-times-circle"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal delete selected items end -->

                            <!--Modal delete all items start-->
                            <div id="modal-delete-all" tabindex="-1" role="dialog" aria-labelledby="modal-login-label"
                                 aria-hidden="true" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                                                &times;
                                            </button>
                                            <h4 id="modal-login-label4" class="modal-title"><a href=""><i
                                                            class="fa fa-exclamation-triangle"></i></a> Are you sure you
                                                want to delete all items? </h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-actions">
                                                <div class="col-md-offset-4 col-md-8"><a href="#" class="btn btn-red">Yes
                                                        &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#"
                                                                                                       data-dismiss="modal"
                                                                                                       class="btn btn-green">No
                                                        &nbsp;<i class="fa fa-times-circle"></i></a></div>
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
                                        <th width="1%"><input type="checkbox"/></th>
                                        <!--wolf0518-->
                                        <th id="sortorder">#</th>
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
                                    @foreach($appointments as $key => $appointment)
                                        <tr>
                                            <td><span style="display: none;">{{$key+1}}</span><input type="checkbox" class="del" val="{{$appointment->id}}"/></td>
                                            <td>{{ $appointment->id }}</td>
                                            @if($appointment->status == 1)
                                                <td><span class="label label-xs label-success">Booked</span></td>
                                            @endif
                                            @if($appointment->status == 0)

                                                <td><span class="label label-xs label-danger">Canceled</span></td>
                                            @endif
                                            @if($appointment->status == 2)
                                                <td><span class="label label-xs label-info">Updated</span></td>
                                            @endif                                            <td>{{ $appointment->patient->mrn_number }}</td>
                                            <td>{{ $appointment->patient->first_name }} {{ $appointment->patient->last_name }}</td>
                                            <td>{{ $appointment->doctor->name }}</td>
                                            <td>{{ strip_tags($appointment->doctor->service->title) }}</td>
                                            <td>{{ $appointment->appointment_date }} ({{$appointment->appointment_day}})<br/>{{$appointment->appointment_time }}</td>
                                            <td><a href="#" data-hover="tooltip" data-placement="top" data-status="{{$appointment->status }}"
                                                   data-target="#modal-edit-appointment-{{$appointment->id}}" data-toggle="modal" title="" class="editApp"
                                                   data-original-title="Edit"><span
                                                            class=" label label-sm label-success"><i
                                                                class="fa fa-pencil"></i></span></a> <a href="#"
                                                                                                        data-hover="tooltip"
                                                                                                        data-placement="top"
                                                                                                        title=""
                                                                                                        data-target="#modal-delete-{{ $appointment->id }}"
                                                                                                        data-toggle="modal"
                                                                                                        data-original-title="Delete"><span
                                                            class="label label-sm label-red"><i
                                                                class="fa fa-trash-o"></i></span></a>
      
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
                            </div>
                            <!-- end table responsive -->
                            <div class="clearfix"></div>
                        </div>

                    </div>
                    <!-- end portlet -->
                </div>
            </div>
        </div>
        <!-- InstanceEndEditable -->
        <!--END CONTENT-->

        <div id="line3"></div>
        <div id="line4"></div>
        <div id="line5"></div>


        @foreach ($appointments as $key => $appointment)


                                <!--Modal delete start-->
                                <div id="modal-delete-{{ $appointment->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this item? </h4>
                                      </div>
                                      <div class="modal-body">
                                        <p><strong>#{{ $appointment->id }}:</strong> {{ $appointment->patient->mrn_number }} / {{ $appointment->patient->first_name }} {{ $appointment->patient->last_name }}</p>
                                        <div class="form-actions">
                                          <div class="col-md-offset-4 col-md-8"> <a href="javascript:void(0)" class="btn btn-red single_del" model_id="{{ $appointment->id }}" val="appointment">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              <!-- modal delete end -->



      <!--Modal Edit appointment start-->
            <div id="modal-edit-appointment-{{$appointment->id}}" tabindex="-1" role="dialog"
                 aria-labelledby="modal-login-label" aria-hidden="true"
                 class="modal fade" style="display: none;">
                <div class="modal-dialog modal-wide-width">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" data-dismiss="modal"
                                    aria-hidden="true" class="close">×
                            </button>
                            <h4 id="modal-login-label3" class="modal-title">Edit
                                Appointment</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form">
                                <form class="form-horizontal" action="/update-appointment/{{$appointment->id}}" method="post">
                                    <div class="form-group">

                                        <label class="col-md-3 control-label">Status</label>
                                        <input type="hidden" name="status" class="status" value="{{$appointment->status}}">
                                        <div class="col-md-6">
                                            <div class="btn-group group1"  style="display: none">
                                                <button type="button"
                                                        class="btn btn-success">
                                                    Booked
                                                </button>
                                                <button type="button"
                                                        data-toggle="dropdown"
                                                        class="btn btn-success dropdown-toggle">
                                                    <span class="caret"></span><span
                                                            class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul role="menu"
                                                    class="dropdown-menu">
                                                    <li><a href="#" class="updated">Updated</a></li>
                                                    <li><a href="#" class="canceled">Cancelled</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="btn-group group2" style="display: none">
                                                <button type="button"
                                                        class="btn btn-info">Updated
                                                </button>
                                                <button type="button"
                                                        data-toggle="dropdown"
                                                        class="btn btn-info dropdown-toggle">
                                                    <span class="caret"></span><span
                                                            class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul role="menu"
                                                    class="dropdown-menu">
                                                    <li><a href="#" class="booked">Booked</a></li>
                                                    <li><a href="#" class="canceled">Cancelled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="btn-group group3" style="display: none">
                                                <button type="button"
                                                        class="btn btn-danger">
                                                    Cancelled
                                                </button>
                                                <button type="button"
                                                        data-toggle="dropdown"
                                                        class="btn btn-danger dropdown-toggle">
                                                    <span class="caret"></span><span
                                                            class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul role="menu"
                                                    class="dropdown-menu">
                                                    <li><a href="#" class="booked">Booked</a></li>
                                                    <li><a href="#" class="updated">Updated</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Patient
                                            MRN No.</label>
                                        <div class="col-md-6">
                                            <input type="text" name="mrn_number" class="form-control"
                                                   placeholder="eg. 0000000001"
                                                   value="{{ $appointment->patient->mrn_number }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Patient
                                            Name </label>
                                        <div class="col-md-6">
                                            <p class="form-control-static">{{ $appointment->patient->first_name }} {{ $appointment->patient->last_name }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Apppointment
                                            Date <span
                                                    class="require">*</span></label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <input type="text" name="appointment_date"
                                                       data-date-format="yyyy/mm/dd"
                                                       placeholder="eg. 2018-01-01"
                                                       class="datepicker-default form-control"
                                                       value="{{ $appointment->appointment_date }}">
                                                <div class="input-group-addon"><i
                                                            class="fa fa-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Appointment
                                            Time <span
                                                    class="require">*</span></label>
                                        <div class="col-md-6">
                                            <?php
                                            $schedules = preg_split('/\n|\r\n?/', $appointment->doctor->clinic_hours)[0];
                                            $schedules = strstr($schedules, ":");
                                            $schedules = explode(" / ", $schedules);
                                            ?>
                                            <div class="radio-list">
                                                @foreach($schedules as $index => $schedule)

                                                    <?php
                                                    $schedule = str_replace(": ", "", $schedule);
                                                    $schedule_str = strtolower(str_replace(" ", "", $schedule));
                                                    $appointment_time_str = strtolower(str_replace(" ", "", $appointment->appointment_time));
                                                    ?>

                                                    <input name="appointment_time" value="{{ $schedule }}" type="radio" {{ $appointment_time_str == $schedule_str ? "checked" : "" }} {{ $index == 0 ? "required" : "" }}> {{ $schedule }}<br/>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Specialty
                                                <span class="require">*</span></label>
                                            <!-- note to programmer: the specialty list
                                            should fetch the data from the "Services
                                            &amp; Procedures" page. -->
                                            <div class="col-md-6">
                                                <select class="form-control"  name="service_id">
                                                    <option disabled="">- Please select a specialty
                                                        -
                                                    </option>
                                                    <option selected="selected">
                                                        Anaesthesiology
                                                    </option>
                                                    <option>Cardiology</option>
                                                    <option>List all specialty here
                                                    </option>
                                                    @foreach ($services as $service)
                                                        <option value="{{$service->id}}" <?php if($appointment->doctor->service_id==$service->id){ echo 'selected';} ?>>{{$service->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Consultant
                                                Name <span
                                                        class="require">*</span></label>
                                            <div class="col-md-6">
                                                <select class="form-control" name ="doctor_id">
                                                    <option>- Please select a consultant
                                                        -
                                                    </option>
                                                    <!-- <option selected="selected">Dr Mohd
                                                        Yani Bin Bahari
                                                    </option>
                                                    <option>List all consultants here
                                                    </option> -->

                                                    @foreach ($doctors as $doctor)
                                                        <option  value="{{$doctor->id}}" <?php if($appointment->doctor->id==$doctor->id){ echo 'selected';} ?>>{{$doctor->name}}</option>
                                                    @endforeach
                                                </select>
                                                <!-- note to programmer: the consultant list
                                                is fetched from the "consultants
                                                listing" page. -->
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Date
                                                of Birth </label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <p class="form-control-static">{{ $appointment->patient->date_of_birth }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Gender</label>
                                            <div class="col-md-6">
                                                <p class="form-control-static">{{ $appointment->patient->gender }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">NRIC/Passport
                                                No.</label>
                                            <div class="col-md-6">
                                                <p class="form-control-static">{{ $appointment->patient->passport_number }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Contact
                                                No. </label>
                                            <div class="col-md-6">
                                                <p class="form-control-static">{{ $appointment->patient->contact_number }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Address</label>
                                            <div class="col-md-6">
                                                <p class="form-control-static">{{ $appointment->patient->address }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">City </label>
                                            <div class="col-md-6">
                                                <p class="form-control-static">{{ $appointment->patient->city }}</p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Postal
                                                Code</label>
                                            <div class="col-md-6">
                                                <p class="form-control-static">{{ $appointment->patient->postal_code }}</p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">State </label>
                                            <div class="col-md-6">
                                                <p class="form-control-static">{{ $appointment->patient->state }}</p>
                                            </div>
                                        </div>
                    <div class="form-actions">
                        <div class="col-md-offset-5 col-md-8">
                            <button type="submit" class="btn btn-red">Save
                                &nbsp;<i class="fa fa-floppy-o"></i></button>

                            <a href="#" data-dismiss="modal"
                               class="btn btn-green">Cancel &nbsp;<i
                                        class="glyphicon glyphicon-ban-circle"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
                                                <!--END MODAL Edit vacancy-->


        @endforeach

        <!-- </div> END PAGE WRAPPER-->

        {{-- Dummy editable lines --}}
        @stop


        @section('end_scripts')

            <script type="text/javascript">
                $('.lem').removeClass('active')
                $('.lem_appointment').addClass('active')
                $(document).ready(function () {
                    // $('#index-banner_info').add('.dataTables_length').add('#DataTables_Table_0_info').add('.dataTables_paginate').add('#index-banner_length').hide();
                })
            </script>

            <script>
                $(document).ready(function () {

                    $(document).on('click','.editApp',function(e) {

                    var status = $(this).attr('data-status');
                        if (status == 1) {
                            $('.group1').show()
                            $('.group2').hide()
                            $('.group3').hide()
                        } else if (status == 2) {
                            $('.group2').show()
                            $('.group1').hide()
                            $('.group3').hide()
                        } else if (status == 0){
                            $('.group3').show()
                            $('.group2').hide()
                            $('.group1').hide()
                        }
                    });
                    $('.booked').on('click', function (e) {
                            $('.group1').show()
                            $('.group2').hide()
                            $('.group3').hide()
                           $('.status').val(1);
                    });
                    $('.canceled').on('click', function (e) {
                        $('.group3').show()
                        $('.group2').hide()
                        $('.group1').hide()
                        $('.status').val(0);
                    });
                    $('.updated').on('click', function (e) {
                        $('.group2').show()
                        $('.group1').hide()
                        $('.group3').hide()
                        $('.status').val(2);
                    });
                });
                //wolf0518
                $('#sortorder').click();
                $('#sortorder').click();
                // $('.save_line').click(function(){
                // 	for(i=1; i<=5; i++){
                // 		if($('#line'+i).length){
                // 			getContent('line1', 'thg1');
                // 		}
                // 	}

                // 	var model = $(this).attr('type');

                // 	var data = $('#submit_preview').serializeArray();
                // 	window.number = 0;
                // 	for(z=1; z<=5; z++){
                // 		$.ajax({
                // 			url:'/admin/save_preview/line'+z+'/save',
                // 			data:{
                // 				model:model,
                // 				data:$('#line'+z).html(),
                // 			},
                // 			type:'post',
                // 			success:function(){
                // 				console.log(z)
                // 				window.number++;
                // 				if(window.number>2){
                // 					reload();
                // 				}
                // 			}
                // 		})
                // 	}
                // })
            </script>


@stop