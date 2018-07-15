@extends('layouts.front')

@section('title')
    <title>Careers</title>
@stop

@section('content')
    
    <!-- Sub Page Banner
			============================================= -->
			<section class="sub-page-banner2 text-center" data-stellar-background-ratio="0.3">
				
				<div class="overlay"></div>
				
		  <div class="container">
					<h1 class="entry-title">Find Doctor</h1>
					<!--<p>Staff is eagerly awaiting to serve our patients and visitors with warm welcome and glowing smile.</p>-->
				</div>
				
			</section>

	
	
    		<!-- Sub Page Content
			============================================= -->

    		<div id="sub-page-content" class="no-padding-bottom clearfix">
				
				
                <!-- doctor profile
                ============================================= -->
                <div class="container">
					
					<h2 class="light bordered main-title">Doctor <span>Profile</span></h2>
					
					<div class="row">
						@foreach($doctors as $doctor)
						<div class="col-md-6 padding-bottom-60 clearfix">
							
							<div class="doctors-img"><img src="i{{$doctor->image }}" width="234" alt="{{$doctor->name}}" title="">
								<div class="height10"></div>
                                <!--<ul class="list-unstyled social2">
									<li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
								</ul>-->
                                <div class="text-center">
                                	<a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                </div>	
                                <div class="height10"></div>

							</div>
                            
							
							<div class="doctors-detail">
								<h4>{{$doctor->name}}<span>{{$doctor->speciality }}</span></h4>
								{{$doctor->degrees }}
							</div>
							
						</div>
                        @endforeach
                        
                        <div class="clearfix"></div>
                        

                        <hr>                        

                        
                        
						
					</div><!-- end row -->
                    
					

				</div><!-- end container -->
                
                
                <div class="height40"></div>
                
                
                <!-- Specialty
				============================================= -->
				<section class="after-booking-sec text-center">
					
					<div class="container">
						
        
						<h1>Featured Services</h1>
						<p class="lead">At KPJ Sentosa KL Specialist Hospital, excellent care, advanced technology and comfortable surroundings are paramount. We take pride in giving our patients the personal care and attention they deserve.</p>
                        <div class="clearfix height40"></div>
						
                        <div class="row text-left">
                            @foreach(Helper::getServices() as $key=>$service)
                                @if($key%3==2)
                                    <div class="row">
                                        @endif
                                        <div class="col-md-4">
                                            <div class="feature"> <i class="pull-left feature-icon"><img src="{{$service->image}}" alt="Anesthesiology"></i>
                                                <div class="feature-content">
                                                    <h5><a href="/services_procedures/{{$service->id}}">{{preg_replace('/(?:<|&lt;)\/?([a-zA-Z]+) *[^<\/]*?(?:>|&gt;)/', '', $service->title)}}</a></h5>
                                                    <p>{!!$service->description!!}</p>
                                                    <div class="height10"></div>
                                                    <a href="/services_procedures/{{$service->id}}">- Learn More</a> </div>
                                            </div>
                                        </div>
                                        @if($key%3==2)
                                    </div>
                                @endif
                            @endforeach
                        </div>
                  <!-- end row -->
                        
                        
                        
                                

					</div>
					
				</section>
			
			
			
			</div>

    		<!--end sub-page-content-->
    
    
	<div class="solid-row"></div>

	@stop
