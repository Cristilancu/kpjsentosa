@extends('layouts.front')

 @section('title')
  
     <title>Online Job Application</title>
    
  @stop

@section('content')
 <!-- Sub Page Banner
			============================================= -->
			<section class="sub-page-banner4 text-center" data-stellar-background-ratio="0.3">
				
				<div class="overlay"></div>
				
		  <div class="container">  
      @if($setting = Helper::hasSetting('applications'))
                        {!!$setting->line1!!}
                    @else  
					<h1 class="entry-title">Careers</h1>
      @endif
					<!--<p>Staff is eagerly awaiting to serve our patients and visitors with warm welcome and glowing smile.</p>-->
				</div>
				
			</section>

	<style type="text/css">
   .error{
    color:red;
   } 
  </style>
	
    		<!-- Sub Page Content
			============================================= -->
			<div id="sub-page-content" class="no-padding-bottom clearfix">
    	
				
				<!-- patient transfer Start
				============================================= -->
			    <div class="container">
					@if($setting = Helper::hasSetting('applications'))
                        {!!$setting->line2!!}
                    @else  
					<h2 class="light bordered main-title">Online Job <span>Application</span></h2>
          @endif
                    <div class="row">
					    @if(Session::has('message'))
                      <div id="message-contact" class="success" style="">Thanks for submitting your application.</div>
                    @endif
						<div class="col-md-7">
							<p>You are applying the position of <strong>{{$career->title}}</strong></p>
                            <div class="appointment-sec2 clearfix">
                      			
                           <form action="/careers/{{$career->id}}/apply" method="post" enctype="multipart/form-data">
                                <div class="pull-right text-danger">* Mandatory field</div>
                                <div class="clearfix"></div>
                                <div class="height10"></div>
                              
                                <div class="form-group">
                                  <label>First Name: <span class="text-danger">*</span></label>
                                  <input type="text" name="first_name" required="" value="{{old('first_name')}}">
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group">
                                  <label>Last Name: <span class="text-danger">*</span></label>
                                  <input type="text" name="last_name" required="" value="{{old('last_name')}}">
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group">
                                  <label>Age:</label>
                                  <input type="text" name="age" value="{{old('age')}}">
                                </div>
                                <div class="clearfix"></div>
                                <input type="hidden" name="career_id" value="{{$career->id}}" value="{{old('career_id')}}">
                                <div class="form-group">
                                  <label>Gender:</label>
                                  <select name="gender">
                                    <option>- Select -</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                  </select> 
                                </div>
                                                               <div class="clearfix"></div>
                                
                                <div class="form-group">
                                  <label>Address: <span class="text-danger">*</span></label>
                                  <textarea name="address" required="" >{{old('address')}}</textarea>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group">
                                  <label>Contact Number: <span class="text-danger">*</span></label>
                                  <input type="text" name="phone" required="" value="{{old('phone')}}">
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group">
                                  <label>Email: <span class="text-danger">*</span></label>
                                  <input type="text" name="emai" required="" value="{{old('emai')}}">
                                   @if ($errors->has('emai'))
                                  <br>
                                    <span class="error">{{ $errors->first('emai') }}</span>
                                @endif
                                </div>
                                <div class="clearfix"></div>
                                
                                <div class="form-group">
                                  <label>Attach CV: <span class="text-danger">*</span></label>
                                  <input name="cv" id="exampleInputFile1" type="file" required=""  accept=".gif, .jpg, .png, .doc , .pdf, .jpeg"  />

                                  @if ($errors->has('cv'))
                                  <br>
                                    <span class="error">{{ $errors->first('cv') }}</span>
                                @endif
                                </div>
                                
                                     <div class="clearfix"></div>
                                 <div class="form-group">
                                <label>Please enter security code: <span class="text-danger">*</span></label>
                              <div class="col-md-6" id='contactfi'>

                                  <div class="g-recaptcha" data-sitekey="6LeIrhsUAAAAAH3jl-mQ7OONZj9Z3nn6-YpfL16P" style="margin-left:-15px;"></div>
                                </div>
                                 @if ($errors->has('g-recaptcha-response'))
                                 <div class="clearfix"></div>
                                         <br>
                                    <span class="error">{{ $errors->first('g-recaptcha-response') }}</span>
                                @endif
                                        
                            </div>

                                         
                            <div class="clearfix"></div>
                            <div class="height10"></div>
                                <div class="clearfix"></div>
                                <input type="submit" class="btn btn-danger btn-rounded" value="Register">
                                 </form>
                              </div>

							
						</div><!-- end col-md-7 -->
						
						<div class="col-md-5">
						
							<div class="item">
								<img src="/images/careers/img.jpg" width="467" class="img-rounded" alt="Patient Transfer">
							</div>
						
						</div><!-- end col-md-5 -->
					
					</div><!-- end row -->
					
					
                    				
				
			  </div><!-- end container -->
              <div class="height40"></div>
              
              

@stop

    @section('end_scripts')
      <script type="text/javascript">
          $('.lem').removeClass('active')
        
      </script>


  <script src='https://www.google.com/recaptcha/api.js'></script>
 @stop