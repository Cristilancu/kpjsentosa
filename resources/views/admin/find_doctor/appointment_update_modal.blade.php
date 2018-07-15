<div id="modal-edit-appointment" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
  <div class="modal-dialog modal-wide-width">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
        <h4 id="modal-login-label3" class="modal-title">Edit Appointment</h4>
      </div>
      <div class="modal-body"></div>
      <div class="form">
        <form method="POST" action="{{ url('admin/appointment/'.$appointment->id.'/update') }}" class="form-horizontal">
          <div class="form-group">
            <label class="col-md-3 control-label">Status</label>
            <div class="col-md-6">
              <div class="btn-group btn_status_list">
                  <button type="button" class="btn btn-success btn_status_selected" style="width: 140px;text-align: left"></button>
                  <button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                  <ul role="menu" class="dropdown-menu text-left"></ul>

                  <input type="hidden" class="statusName" name="status" value="{{ $appointment->status }}">

                </div>
            </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Patient MRN No.</label>
              <div class="col-md-6">
                <input name="appointment_mrn" type="text" class="form-control" placeholder="eg. 0000000001" value="{{ $appointment->patient ? $appointment->patient->mrn_number : '-' }}" required>
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Patient Name </label>
              <div class="col-md-6">
                  <p class="form-control-static">{{ $appointment->patient ? $appointment->patient->first_name.' '.$appointment->patient->last_name : '-' }}</p>
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Apppointment Date</label>
              <div class="col-md-4">
                <div class="input-group">
                  <input name="appointment_date" type="text" data-date-format="yyyy-mm-dd" placeholder="eg. 2018-01-01" class="datepicker-default form-control" value="{{ date('Y-m-d', strtotime($appointment->appointment_date)) }}" required>
                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Appointment Time <span class='require'>*</span></label>
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
              <label class="col-md-3 control-label">Specialty</label>
              <div class="col-md-6">
                <select name="appointment_service_id" class="form-control" required>
                  <option value="">- Select -</option>
                  @foreach(\App\service::where('status',1)->get() as $service)
                    <option value="{{$service->id}}" {{($service->id == $appointment->doctor->service_id ? 'selected="selected"':'')}}>{{strip_tags($service->title)}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Consultant Name</label>
              <div class="col-md-6">
                <select name="appointment_doctor_id" class="form-control" required>
                @foreach(\App\doctor::where('status',1)->get() as $appointment_doctor)
                  <option value="{{$appointment_doctor->id}}" class="service-{{$appointment_doctor->service_id}}" {{($appointment_doctor->id==$appointment->doctor_id?'selected="selected"':'')}}>{{$appointment_doctor->name}}</option>
                @endforeach
                </select>
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-3 control-label">Date of Birth </label>
              <div class="col-md-4">
                <div class="input-group">
                  <p class="form-control-static">
                    {{ $appointment->patient && $appointment->patient->date_of_birth ? date("Y-m-d", strtotime($appointment->patient->date_of_birth)) : "-" }}
                  </p>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Gender</label>
              <div class="col-md-6">
                <p class="form-control-static">
                  {{ $appointment->patient && $appointment->patient->gender ? $appointment->patient->gender : "-" }}
                </p>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">NRIC/Passport No.</label>
              <div class="col-md-6">
                <p class="form-control-static">{{ $appointment->patient && $appointment->patient->passport_number ? $appointment->patient->passport_number : "-" }}</p>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Contact No. </label>
              <div class="col-md-6">
              <p class="form-control-static">
              {{ $appointment->patient && $appointment->patient->contact_number ? $appointment->patient->contact_number : "-" }}
              </p>
              </div>
            </div>
              <div class="form-group">
              <label class="col-md-3 control-label">Address</label>
              <div class="col-md-6">
                  <p class="form-control-static">
                  {{ $appointment->patient && $appointment->patient->address ? $appointment->patient->address : "-" }}
                  </p>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">City </label>
              <div class="col-md-6">
                  <p class="form-control-static">
                  {{ $appointment->patient && $appointment->patient->city ? $appointment->patient->city : "-" }}
                  </p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Postal Code</label>
              <div class="col-md-6">
                  <p class="form-control-static">
                  {{ $appointment->patient && $appointment->patient->postal_code ? $appointment->patient->postal_code : "-" }}
                  </p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">State </label>
              <div class="col-md-6">
                  <p class="form-control-static">{{ $appointment->patient && $appointment->patient->state ? $appointment->patient->state : "-" }}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Country </label>
              <div class="col-md-6">
                  <p class="form-control-static">
                  {{ $appointment->patient && $appointment->patient->country_id ? $appointment->patient->country->name : "-" }}
                  </p>
              </div>
            </div>
              <div class="form-group">
              <label class="col-md-3 control-label">Email (Login ID)</label>
              <div class="col-md-6">
                <p class="form-control-static">
                {{ $appointment->patient ? $appointment->patient->user->email : "-" }}
                </p>
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

<script type="text/javascript">
  initStatus($('.btn_status_list'));
  bindAnchorClick($('.btn_status_list'));

  function initStatus(element) {
    currentStatus = element.find(".statusName").val();

    changeStatus(currentStatus, element);
  }

  function changeStatus(selectedStatus, element) {
    var statusList = ['1', '2', '3'];

    element.find('.btn_status_selected')
           .attr('class', 'btn '+ getClassName(selectedStatus) +' btn_status_selected')
           .html(getStatusName(selectedStatus))
           .next()
           .attr('class', 'btn '+ getClassName(selectedStatus) +' dropdown-toggle');

    var ul = "";

    $.each(statusList, function (i,v) {
      if (selectedStatus != v) {
        ul = ul + ("<li><a href='javascript:void(0)' data-value='"+ v +"'>"+ getStatusName(v) +"</a></li>");
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
    if (status == '1') return 'btn-success';
    if (status == '2') return 'btn-info';
    if (status == '3') return 'btn-danger';
  }

  function getStatusName(status) {
    if (status == '1') return 'Booked';
    if (status == '2') return 'Updated';
    if (status == '3') return 'Cancelled';
  }
</script>