<div class="procedures">
    <h3>Quick Access</h3>
    <div class="panel-group sidebar-nav" id="accordion3">
      <div class="panel panel-sidebar">
        <div class="panel-heading">
        <h4 class="panel-title active">
        <a data-toggle="collapse" data-parent="#accordion3" href="#collapse1">
        <i class="fa fa-angle-right"></i> Home
        </a>
        </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse @if(Request::is('patient/dashboard') || Request::is('patient/') ) in @endif">
          <div class="panel-body">
          <a href="{{ url("/patient/dashboard") }}" @if(Request::is('patient/dashboard') || Request::is('patient/') ) class="active" @endif><i class="fa fa-angle-right"></i> Dashboard</a>
          </div>
        </div>
      </div>
      <div class="panel panel-sidebar">
        <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion3" href="#collapse2">
        <i class="fa fa-angle-right"></i> Appointments
        </a>
        </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse @if(Request::is('patient/appointment') || Request::is('patient/appointment/*') ) in @endif">
          <div class="panel-body">
          <a href="{{ url("/patient/appointment") }}" @if(Request::is('patient/appointment') || Request::is('patient/appointment/*') ) class="active" @endif><i class="fa fa-angle-right"></i> Booked Appointments</a>
          </div>
        </div>
      </div>
      <div class="panel panel-sidebar">
        <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion3" href="#collapse3">
        <i class="fa fa-angle-right"></i> My Account
        </a>
        </h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse @if(Request::is('patient/account')) in @endif">
          <div class="panel-body">
            <a href="{{ url("/patient/account") }}" @if(Request::is('patient/account')) class="active" @endif><i class="fa fa-angle-right"></i> Edit Account Details</a>
            <a href="#" data-target="#modal-change-password" data-toggle="modal" @if(Request::is('patient/dashboard') || Request::is('patient/') ) class="active" @endif><i class="fa fa-angle-right"></i> Change/Update Password</a>
           
          </div>
        </div>
      </div>
      
    </div>
</div>