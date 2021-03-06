@extends('layouts.front')

 @section('title')
    <title>Contact Us</title>
  @stop
@section('content')

			<section class="sub-page-banner13 text-center" data-stellar-background-ratio="0.3">
				
				<div class="overlay"></div>
				
				<div class="container">
         @if($setting = Helper::hasSetting('feedback'))
                        {!!$setting->line1!!}
                    @else 
					<h1 class="entry-title">Contact Us</h1>
            @endif
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

    		<div id="sub-page-content" class="clearfix margin-bottom-40">
              <div class="container">
               @if($setting = Helper::hasSetting('feedback'))
                        {!!$setting->line2!!}
                    @else 
                <h2 class="light bordered">Map &amp; <span>Direction</span></h2>
                @endif
                <div class="row">

                  <div class="col-md-12">
           	@if($setting=Helper::hasSetting('google_map'))

                  	  <iframe src="{{$setting->line2}}" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                  	@else
					
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31869.680998370222!2d101.69736!3d3.17083!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5093028faadba857!2sSentosa+Medical+Centre!5e0!3m2!1sen!2s!4v1467355139378" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            @endif
                  </div>
                  <!-- end col-md-12 -->
                  <div class="height40"></div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                @if($setting = Helper::hasSetting('feedback'))
                        {!!$setting->line3!!}
                    @else  
                    <h2 class="light bordered">Contact <span>Us</span></h2>

                    <!-- Get in Touch Widget
							============================================= -->
                    <div class="get-in-touch-widget boxed">
                      <h5>KPJ Sentosa KL Specialist Hospital</h5>
                      <ul class="list-unstyled">
                        <li><i class="fa fa-phone"></i>(03) 4043-7166</li>
                        <li><i class="fa fa-print"></i>(03) 4043-7761</li>
                        <li><i class="fa fa-globe"></i><a href="http://www.kpjsentosa.com">www.kpjsentosa.com</a></li>
                        <li><i class="fa fa-map-marker"></i>36 Jalan Cemor, Kompleks Damai, 50400 Kuala Lumpur, Malaysia.</li>
                      </ul>
                    </div>
                @endif
                    <!-- Social
							============================================= -->
             @if($setting = Helper::hasSetting('feedback'))
                        {!!$setting->line4!!}
                    @else 
                    <ul class="social-rounded">
                      <li><a href="https://www.facebook.com/KPJ-Sentosa-KL-Specialist-Hospital-Events-109237816094300/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#." target="_blank"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#." target="_blank"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#." target="_blank"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                   @endif
                    <div class="clearfix"></div>
                  </div>
                  <!-- end col-md-4 -->
                  <div class="col-md-8" id='contacti'>
               @if($setting = Helper::hasSetting('feedback'))
                        {!!$setting->line5!!}
                    @else 
                    <h2 class="light bordered">Feedback &amp; <span>Enquiry</span></h2>
              @endif
                    <!-- Contact Form
							============================================= -->
                    <div class="contact-form clearfix">
                    @if(Session::has('message'))
                      <div id="message-contact" class="success" style="">Thank you! we'll contact you shortly.</div>
                    @endif
                     @if(Session::has('error'))
                      <div id="" class="alert alert-danger" style="">{{Session::get('error')}}</div>
                    @endif
                      
                    <form action="/feedback" method="post" id='contact_post'>
                        <div class="appointment-sec2 no-margin-top clearfix">
                        	<div class="pull-right text-danger">* Mandatory field</div>
                            <div class="clearfix"></div>
                            <div class="height10"></div>
                            <div class="form-group">
                              <label>Name: <span class="text-danger">*</span></label>
                              <input type="text" name='name' required="" value="{{old('name')}}">
                            </div>
                            <div class="clearfix"></div>

                            
                            <div class="form-group">
                              <label>Email Address: <span class="text-danger">*</span></label>
                              <input type="email" name='email' required="" value="{{old('email')}}">
                            </div>
                            <div class="clearfix"></div>
                            
                            <div class="form-group">
                              <label>Contact Number: <span class="text-danger">*</span></label>
                              <input type="text" name='phone' required="" value="{{old('phone')}}">
                            </div>
                            <div class="clearfix"></div>
                             
                            <div class="form-group">
                              <label>Select Category: <span class="text-danger">*</span></label>
                              <select  name='category'>
                                  <option>- Select category -</option>
                                  <option>Feedback</option>
                                  <option>Inquiry</option>
                                  <option>General</option>
                                  <option>Complaint</option>
                                  <option>Appointment</option>
                              </select>
                            </div>
                            <div class="clearfix"></div>
                            
                            <div class="form-group">
                              <label>Subject: <span class="text-danger">*</span></label>
                              <input type="text" name="subject" required="" value="{{old('subject')}}">
                            </div>
                            <div class="clearfix"></div>
                            
                            <div class="form-group">
                              <label>Your Message:</label>
                              <textarea placeholder="Message"  id="msg" name="message"  >{{old('message')}}</textarea >
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group">
                                <label>Please enter security code: <span class="text-danger">*</span></label>
                            	<div class="col-md-6" id='contactfi'>

                                	<div class="g-recaptcha" data-sitekey="6LeIrhsUAAAAAH3jl-mQ7OONZj9Z3nn6-YpfL16P" style="margin-left:-15px;"></div>
                                </div>
                            </div>
                                    @if(Session::has('error'))
                                    <br>
                      <div id="" class="" style="color:red">{{Session::get('error')}}</div>
                                 @endif
                            <div class="clearfix"></div>
                            <div class="height10"></div>
                            <div class="clearfix"></div>
                            <input type="submit" class="btn btn-danger btn-rounded" value="Submit">
                      </div>
                      	</form>
                    </div>
                  </div>
                  <!-- end col-md-8 -->
                </div>
              </div>
  		  </div>

    		<!--end sub-page-content-->
    
    
	<div class="solid-row"></div>
    
 @stop


 @section('end_scripts')
      <script type="text/javascript">
          $('.lem').removeClass('active')
          $('.lem_contact').addClass('active')

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


  <script src='https://www.google.com/recaptcha/api.js'></script>
 @stop