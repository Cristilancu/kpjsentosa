@extends('layouts.front')

 @section('title')
    <title>GPS & Partners</title>
  @stop

@section('content')

   <!-- Sub Page Banner
			============================================= -->
			<section class="sub-page-banner3 text-center" data-stellar-background-ratio="0.3">
				
				<div class="overlay"></div>
				
		 		<div class="container">
					<h1 class="entry-title">GPs &amp; Partners</h1>
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
    		<!-- InstanceBeginEditable name="EditRegion2" -->
    		<div id="sub-page-content" class="no-padding-bottom clearfix">
              
              
              <!-- patient transfer Start
				============================================= -->
              <div class="container">
                <h2 class="light bordered main-title">GP / Physician <span>Login</span></h2>
                <div class="row">
                  <div class="col-md-12">
                    <div class="media pull-right"><img src="images/gp_partners/img.jpg" width="467" class="img-rounded" alt="GPs &amp; Partners"></div>
                    <p>KPJ Healthcare has developed this online referral process, designed to get your patient into partner KPJ Hospitals, including KPJ Sentosa KL Specialist Hospital. This account needs formal approval from Account Administrator, reviewed by hospital committee on professional grounds of practice. Once your account is activated you can contact KPJ Healthcare Hospitals, refer patients paper less. (ereferral), get updates about your patients, order investigations, request appointments, contact doctors and request some Wellness, Healthcare information.</p>
                    <p>This service is only approved according to KPJ Healthcare/ Hospital policy and may require some information from you, related to your practice.</p>
                    <p>GPs, Consultants and Patient facilitators can also fax the form to Our Fax No: (03) 3377-7800 by printing this.</p>
                    <p>Also if you have any other related inquiry Please fill the form below in most accurate way, make sure your email entered is correct and you regularly check the email.</p>
                    <div class="height20"></div>

                  </div>
                  <!-- end col-md-12 -->
                </div>
                <!-- end row -->
              </div>
    		  <!-- end container -->
              <div class="height20"></div>
    		  
              
              <!-- Features
                ============================================= -->
              <section class="after-booking-sec">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <h2 class="light bordered">GP / Physician <span>Login</span></h2>
                      <div class="appointment-sec2 clearfix">
                      	
                        <div class="pull-right text-danger">* Mandatory field</div>
                        <div class="clearfix"></div>
                        <div class="height10"></div>
                        
                        <div class="form-group">
                          <label>Login ID: <span class="text-danger">*</span></label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                        
                        <div class="form-group">
                          <label>Password: <span class="text-danger">*</span></label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                        <p><a href="#">Forgot your password?</a></p>
                        <input type="submit" class="btn btn-danger btn-rounded" value="Login">
                      </div>
                      
                    </div><!-- end col-md-6 -->
                    
                    <div class="col-md-6">
                      <h2 class="light bordered">New <span>Registration</span></h2>
                      <div class="appointment-sec2 clearfix">
                      	
                        <div class="pull-right text-danger">* Mandatory field</div>
                        <div class="clearfix"></div>
                        <div class="height10"></div>
                      
                        <div class="form-group">
                          <label>First Name:</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                          <label>Last Name:</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                          <label>Clinic Name:</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                          <label>Practice No.:</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                          <label>Address:</label>
                          <textarea name="textarea" class="form-control"></textarea>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                          <label>Phone:</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                          <label>Email:</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                          <label>Password:</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                        <input type="submit" class="btn btn-danger btn-rounded" value="Register">
                      </div>
                    </div><!-- end col-md-6 -->
                    
                  </div>
                </div>
              </section>

  		  </div>
    		<!-- InstanceEndEditable -->
    		<!--end sub-page-content-->
    
    
	<div class="solid-row"></div>
	
@stop


 @section('end_scripts')
      <script type="text/javascript">
          $('.lem').removeClass('active')
          $('.lem_partners').addClass('active')

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