<style>
    ul.dropdown-menu {
        top: 30px;
        left: 132px;
    }

    .bootstrap-timepicker-widget table tbody tr td {
        padding: 2px;
        margin: 0
    }
</style>

<link type="text/css" rel="stylesheet" href="/admin_html/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css">

<!--Modal edit schedule start-->
    <div class="modal-dialog modal-wide-width">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close quit">&times;</button>
                <h4 id="modal-login-label3" class="modal-title">Edit Consultant Schedule</h4>
            </div>
            <div class="modal-body">
                <div class="form">
                    <form method="GET" action="admin/save/schedule" class="form-horizontal scheduleform">
                        <input type="hidden" name="date" id="dateschedule" value="{{$dateschedule}}">
                        <input type="hidden" name="doctor_id" id="iddoctor" value="{{$doctor->id}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <?php
                        $schedules = preg_split('/\n|\r\n?/', $doctor->clinic_hours)[0];
                        $schedules = strstr($schedules, ":");
                        $schedules = explode(" / ", $schedules);
                        $total = 0;
                        $currentDayName = [date('l', strtotime($dateschedule))];
                        $currentMonthName = [date('F', strtotime($dateschedule))];
                        $currentYearName = [date('Y', strtotime($dateschedule))];
                        ?>

                        @foreach($schedules as $index => $schedule)

                            <?php
                            
                            $schedule = str_replace(": ", "", $schedule);
                           
                            $detail = $doctor->schedules
                                ? $doctor->schedules->where('appointment_time', trim($schedule))->first()
                                : collect([]);
                           // $test = $doctor->schedules->where('appointment_time', trim($schedule))->first();
                            // print_r($doctor); 
                            if ($detail) {
                                $appointment_time = explode('-', $detail->appointment_time);
                                $start = (isset($appointment_time[0])) ? $appointment_time[0] : '';
                                $end = (isset($appointment_time[1])) ? $appointment_time[1] : '';
                            } else {
                                $scheduleSplit = explode('-', $schedule);
                                $start = (isset($scheduleSplit[0])) ? $scheduleSplit[0] : '';
                                $end = (isset($scheduleSplit[1])) ? $scheduleSplit[1] : '';
                            }

                            $total += 1;
                            ?>

                            <div class="slot">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="status0">Statuss</label>
                                    <div class="col-md-6">
                                        <div class="btn-group pull-left btn_status_list">
                                            <button type="button" class="btn btn-success btn_status_selected" style="width: 140px;text-align: left"></button>
                                            <button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                                            <ul role="menu" class="dropdown-menu text-left"></ul>
                                         
                                            <input type="hidden" class="statusName" name="status[]" value="{{ $detail && $detail->status ? $detail->status : "Available" }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Appointment Time</label>
                                    <div class="col-md-6">
                                        <div class="input-group bootstrap-timepicker"><input type="text" class="timepicker-default form-control start" name="appointment_times_start[]" placeholder="eg. 9.00 AM" value="{{ $start }}" /><span class="input-group-addon">to</span><input type="text" name="appointment_times_end[]" class="timepicker-default form-control end" placeholder="eg. 1.00 PM" value="{{ $end }}"/></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Max Patients</label>
                                    <div class="col-md-6">
                                        <input type="number" name="max_patients" class="form-control maxp" placeholder="eg. 25" style="width: 100px" min="0" value="{{ $detail && $detail->max_patients ? $detail->max_patients : "" }}" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Bulk Options</label>
                                    <div class="col-md-9">
                                        <div class="xss-margin"></div>
                                        
                                        <?php
                                        $bulk_values = $detail && $detail->bulk_values
                                            ? explode(";", $detail->bulk_values)
                                            : [];
                                        $bulk_values_1 = [];
                                        $bulk_values_2 = [];
                                        $bulk_values_3 = [];
                                        $bulk_values_4 = [];
                                        
                                        if ($detail && $detail->bulk_option == 0 && !empty($bulk_values)) {
                                            $bulk_values_1 = explode(",", $bulk_values[0]);
                                            $bulk_values_2 = explode(",", $bulk_values[1]);
                                            // show only matching elements
                                            // $bulk_values_1 = array_intersect($currentDayName, $bulk_values_1);
                                            // $bulk_values_2 = array_intersect($currentMonthName, $bulk_values_2);
                                            
                                        } else if ($detail && $detail->bulk_option == 1 && !empty($bulk_values)) {
                                            $bulk_values_3 = explode(",", $bulk_values[0]);
                                            $bulk_values_4 = explode(",", $bulk_values[1]);
                                            
                                            // show only matching elements
                                            // $bulk_values_3 = array_intersect($currentDayName, $bulk_values_3);
                                            // $bulk_values_4 = array_intersect($currentYearName, $bulk_values_4);
                                        }
                                        

                                        ?>

                                        <div class="col-md-4 text-left byDaysPerMonth-{{ $index }}">
                                            <label>
                                                <input name="bulk_{{ $index }}" type="radio" value="0"  {{ $detail && $detail->bulk_option == 0 && !empty($bulk_values) ? "checked" : "" }} />
                                                By Days / Month
                                            </label>
                                            <div class="clearfix"></div>
                                            <span class="inline">Every
                          <select multiple="multiple" name="bulkValues_1_{{ $index }}[]" style="height: 180px" class="form-control daybymonth" >
                            <option>- Select -</option>
                              <option value="Monday"
                                      {{ in_array("Monday", $bulk_values_1) ? "selected" : "" }}>Monday</option>
                              <option value="Tuesday"
                                      {{ in_array("Tuesday", $bulk_values_1) ? "selected" : "" }}>Tuesday</option>
                              <option value="Wednesday"
                                      {{ in_array("Wednesday", $bulk_values_1) ? "selected" : "" }}>Wednesday</option>
                              <option value="Thursday"
                                      {{ in_array("Thursday", $bulk_values_1) ? "selected" : "" }}>Thursday</option>
                              <option value="Friday"
                                      {{ in_array("Friday", $bulk_values_1) ? "selected" : "" }}>Friday</option>
                              <option value="Saturday"
                                      {{ in_array("Saturday", $bulk_values_1) ? "selected" : "" }}>Saturday</option>
                              <option value="Sunday"
                                      {{ in_array("Sunday", $bulk_values_1) ? "selected" : "" }}>Sunday</option>
                          </select>
                          of
                          <select multiple="multiple" name="bulkValues_2_{{ $index }}[]" style="height: 200px;" class="form-control bymonth" >
                            <option>- Select Month -</option>
                              <option value="Every Month"
                                      {{ in_array("Every Month", $bulk_values_2) ? "selected" : "" }}>Every Month</option>
                              <option value="January"
                                      {{ in_array("January", $bulk_values_2) ? "selected" : "" }}>January</option>
                              <option value="February"
                                      {{ in_array("February", $bulk_values_2) ? "selected" : "" }}>February</option>
                              <option value="March"
                                      {{ in_array("March", $bulk_values_2) ? "selected" : "" }}>March</option>
                              <option value="April"
                                      {{ in_array("April", $bulk_values_2) ? "selected" : "" }}>April</option>
                              <option value="May"
                                      {{ in_array("May", $bulk_values_2) ? "selected" : "" }}>May</option>
                              <option value="June"
                                      {{ in_array("June", $bulk_values_2) ? "selected" : "" }}>June</option>
                              <option value="July"
                                      {{ in_array("July", $bulk_values_2) ? "selected" : "" }}>July</option>
                              <option value="August"
                                      {{ in_array("August", $bulk_values_2) ? "selected" : "" }}>August</option>
                              <option value="September"
                                      {{ in_array("September", $bulk_values_2) ? "selected" : "" }}>September</option>
                              <option value="October"
                                      {{ in_array("October", $bulk_values_2) ? "selected" : "" }}>October</option>
                              <option value="November"
                                      {{ in_array("November", $bulk_values_2) ? "selected" : "" }}>November</option>
                              <option value="December"
                                      {{ in_array("December", $bulk_values_2) ? "selected" : "" }}>December</option>
                          </select>
                          </span>
                                        </div><!-- end col-md-4 -->

                                        <div class="col-md-4 text-left byDaysPerYear-{{ $index }}">
                                            <label>
                                                <input name="bulk_{{ $index }}" type="radio" value="1" {{ $detail && $detail->bulk_option == 1 ? "checked" : "" }} />
                                                By Days / Year
                                            </label>

                                            <div class="clearfix"></div>
                                            <span class="inline">All
                          <select multiple="multiple" name="bulkValues_1_{{ $index }}[]" style="height: 180px;" class="form-control daybyyear" >
                            <option>- Select -</option>
                              <option value="Monday"
                                      {{ in_array("Monday", $bulk_values_3) ? "selected" : "" }}>Monday</option>
                              <option value="Tuesday"
                                      {{ in_array("Tuesday", $bulk_values_3) ? "selected" : "" }}>Tuesday</option>
                              <option value="Wednesday"
                                      {{ in_array("Wednesday", $bulk_values_3) ? "selected" : "" }}>Wednesday</option>
                              <option value="Thursday"
                                      {{ in_array("Thursday", $bulk_values_3) ? "selected" : "" }}>Thursday</option>
                              <option value="Friday"
                                      {{ in_array("Friday", $bulk_values_3) ? "selected" : "" }}>Friday</option>
                              <option value="Saturday"
                                      {{ in_array("Saturday", $bulk_values_3) ? "selected" : "" }}>Saturday</option>
                              <option value="Sunday"
                                      {{ in_array("Sunday", $bulk_values_3) ? "selected" : "" }}>Sunday</option>
                          </select>
                          of
                          <select multiple="multiple" name="bulkValues_2_{{ $index }}[]" style="height: 200px;" class="form-control byyear" >
                            <option>- Select Year -</option>
                              <option value="Every Year"
                                      {{ in_array("Every Year", $bulk_values_4) ? "selected" : "" }}>Every Year</option>

                              <?php
                              $firstYear = (int)date('Y') - 0;
                              $lastYear = $firstYear + 20;

                              for($i=$firstYear; $i <= $lastYear; $i++)
                              {
                                  $selected = in_array($i, $bulk_values_4) ? "selected" : "";
                                  echo '<option value='.$i.' '.$selected.'>'.$i.'</option>';
                              }
                              ?>
                          </select>
                          </span>
                                            <div class="margin-top-10px"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <hr>
                        @endforeach

                        <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8">
                                <button type="submit" class="btn btn-red">
                                    Save &nbsp;<i class="fa fa-floppy-o"></i>
                                </button>&nbsp;
                                <a href="#" data-dismiss="modal" class="btn btn-green quit">
                                    Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{{-- <script src="{{asset('js/saveschedule.js')}}"></script> --}}

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

    $(function () {
        $('.timepicker-default').timepicker();
    });

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

<!--END MODAL edit schedule-->