@extends('layouts.front')

@section('title')
 <title>KPJ Sentosa KL Specialist Hospital</title>
    
@stop
@section('content')
	   	<script type="text/javascript">

    function autoClick() { 
    document.getElementById('onload').click();
    } 
 
    </script>	
	
    <div id="content-index">
    
	
		<!-- Main Banner
		============================================= -->
		<section id="slider" class="tp-banner-container index-rev-slider clearfix">
			
			<div class="tp-banner">
			
				<ul>	
				<?php $transitions = [
						1=>['slide'=>'fade','speed'=>'3000','x'=>'','y'=>'','start'=>''],
						2=>['slide'=>'slideup','speed'=>'2500','x'=>'','y'=>'','start'=>''],
						3=>['slide'=>'slideright','speed'=>'2500','x'=>'','y'=>'','start'=>'']
					]; ?>

				<?php $indexes = Helper::getBanners();?>

				@if(count($indexes)) 

					@foreach($indexes as $key=>$ind)

				@if($ind->image && $ind->image_2)
					<?php $i = ($key % 3) + 1;?>
						@if($ind->align=='left')

						<li data-transition="{{$transitions[$i]['slide']}}" data-slotamount="10" data-thumb=""> 							 			
						<img src="{{$ind->image}}" alt="image" />
						<div class="caption sft" data-x="0" data-y="150" data-speed="3000" data-start="1300" data-easing="easeOutBack">
							<img src="{{$ind->image_2}}" alt="">
						</div>

						<div class="caption sft big_white" data-x="0" data-y="235" data-speed="1000" data-start="1700" data-easing="easeOutExpo">
							<strong>{{$ind->header}}</strong>
						</div>
						<div class="caption sfr medium_grey" data-x="0" data-y="310" data-speed="1000" data-start="2500" data-easing="easeOutExpo">{{$ind->sub_header}}</div>
						@if($ind->text)
						<div class="caption sfb" data-x="522" data-y="390" data-speed="300" data-start="2500" data-easing="easeOutExpo"><a href="{{Helper::fix_link($ind->website)}}" class="btn btn-rounded btn-bordered">{{$ind->text}}</a></div>
						@endif
						</li>
					@else

						
						<li data-transition="{{$transitions[$i]['slide']}}" data-slotamount="6" data-thumb=""> 
						<img src="{{$ind->image}}" alt="image" />	
						<div class="caption sft" data-x="540" data-y="150" data-speed="2000" data-start="1300" data-easing="easeOutBack">
							<img src="{{$ind->image_2}}" alt="">
						</div>

						<div class="caption sft big_white" data-x="140" data-y="260" data-speed="1500" data-start="1700" data-easing="easeOutExpo">
							<strong>{{$ind->header}}</strong>
						</div>
						<div class="caption sfb medium_grey text-center" data-x="170" data-y="340" data-speed="1500" data-start="2500" data-easing="easeOutExpo">{{$ind->sub_header}}.</div>
					@if($ind->text)
						<div class="caption sfb" data-x="522" data-y="390" data-speed="300" data-start="2500" data-easing="easeOutExpo"><a href="{{Helper::fix_link($ind->website)}}" class="btn btn-rounded btn-bordered">{{$ind->text}}</a></div>
						@endif
					</li>

						@endif

					@endif



					@endforeach

				@else
			
					<!-- Fade
					============================================= -->
					<li data-transition="fade" data-slotamount="10" data-thumb=""> 							 			
						<img src="images/index/banner1.jpg" alt="image" />
						<div class="caption sft" data-x="0" data-y="150" data-speed="3000" data-start="1300" data-easing="easeOutBack">
							<img src="images/index/heart-icon.png" alt="">
						</div>

						<div class="caption sft big_white" data-x="0" data-y="235" data-speed="1000" data-start="1700" data-easing="easeOutExpo">
							<strong>Care for Life</strong>
						</div>
						<div class="caption sfr medium_grey" data-x="0" data-y="310" data-speed="1000" data-start="2500" data-easing="easeOutExpo">Together we continuously care for society.</div>
						<div class="caption sfb" data-x="0" data-y="350" data-speed="2500" data-start="2500" data-easing="easeOutExpo">
							<a href="https://drive.google.com/open?id=1dAyyAN2sMV_odsVqIZnQCV0nQ-o9-NL3gPC3y47tFNY" target="_blank" class="btn btn-rounded btn-bordered">Get Appointment</a>
						</div>
					</li>
				   
					
					<!-- Slide Right
					============================================= -->
					<li data-transition="slideright" data-slotamount="6" data-thumb=""> 
						<img src="images/index/banner2.jpg" alt="image" />	
						<div class="caption sft" data-x="540" data-y="150" data-speed="2000" data-start="1300" data-easing="easeOutBack">
							<img src="images/index/emergency-services-icon.png" alt="">
						</div>

						<div class="caption sft big_white" data-x="140" data-y="260" data-speed="1500" data-start="1700" data-easing="easeOutExpo">
							<strong>KPJ Sentosa KL Specialist Hospital</strong>
						</div>
						<div class="caption sfb medium_grey text-center" data-x="170" data-y="340" data-speed="1500" data-start="2500" data-easing="easeOutExpo">Staff is eagerly awaiting to serve our patients and visitors with warm welcome and glowing smile.</div>
						<div class="caption sfb" data-x="522" data-y="390" data-speed="2000" data-start="3000" data-easing="easeOutExpo"><a href="/find_doctor" class="btn btn-rounded btn-bordered">Find Doctor</a></div>
					</li>
					
					
					<!-- Slide Up
					============================================= -->
					<li data-transition="slideup" data-slotamount="15" data-thumb=""> 
						<img src="images/index/banner3.jpg" alt="image" />
						<div class="caption sfl" data-x="0" data-y="150" data-speed="1500" data-start="1300" data-easing="easeOutBack"><img src="images/index/better-technology-icon.png" alt=""></div>

                        <div class="caption sft big_white" data-x="0" data-y="235" data-speed="1500" data-start="1700" data-easing="easeOutExpo"><strong>Accredited Hospital</strong></div>
						<div class="caption sfr medium_grey" data-x="0" data-y="310" data-speed="1500" data-start="2500" data-easing="easeOutExpo">Committed to continuous focus on improving patient outcomes and services.</div>
						<div class="caption sfb" data-x="0" data-y="380" data-speed="300" data-start="2500" data-easing="easeOutExpo"><a href="contact_us.html" class="btn btn-rounded btn-bordered">Get Direction</a></div>
					</li>
				
				@endif
				</ul>		
				
			</div>	
			
		</section>



		<div class="page-header-breadcrumb">


			<!-- <ol class="breadcrumb page-breadcrumb text-center">
				<li><a href="/make-appointment">Make an Appointment</a>&nbsp;</li>
				@if(\Auth::check())
					@if(\Auth::user()->patient)
						<li><a href="/patient/dashboard">You are logged in as: {{\Auth::user()->patient->first_name}} {{\Auth::user()->patient->last_name}}</a></li>
					@endif
					<li><a href="/patient/logout">Logout</a></li>
				@else
					<li><a href="/patient/registration">Sign Up</a>&nbsp;</li>
					<li><a href="#" data-target="#modal-login" data-toggle="modal">Patient Login</a>&nbsp;</li>
				@endif
			</ol> -->



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
		<!-- welcome text start -->
        <section class="creative-sec no-bg">
            <div class="container">
            	<?php $setting=Helper::hasSetting('index_page');?>
            @if($setting)

            	{!! $setting->line1 !!}
            @else
                <div class="text-center">
                    <h2 class="light">At KPJ Sentosa KL Specialist Hospital, excellent care, advanced technology and comfortable surroundings are paramount.</h2>
                    <p class="lead">We take pride in giving our patients the personal care and attention they deserve. We look at our services through patients' eyes to create positive and caring relationships with our patients and their family members.</p>
       				<p><img src="/images/index/img_logos.jpg" alt=""></p>
                    <a href="/about-us" class="btn btn-rounded btn-danger">read more</a>

                </div>
            @endif
  
            </div>
        </section><!-- end welcome text -->
        

        
        <!-- Features
		============================================= -->
		<section class="features">
					
			<div class="container">

				@if($setting &&$setting->status )
					{!!$setting->line2!!}
				@else
                  <h1 class="text-center">Featured Services</h1>
                @endif
                  <div class="row text-left">
				  <?php
					$key=0;
				  ?>
              @foreach(Helper::getServices()->filter(function ($value) { return $value->isFeatured;}) as $service)
                @if($key%3==0)
                  <div class="row">
                @endif
                    <div class="col-md-4">
                      <div class="feature"> <i class="pull-left feature-icon"><img src="{{$service->image}}" alt="Anesthesiology"></i>
                          <div class="feature-content">
                            <h5><a href="/services_procedures/{{$service->id}}">{{preg_replace('/(?:<|&lt;)\/?([a-zA-Z]+) *[^<\/]*?(?:>|&gt;)/', '', $service->title)}}</a></h5>
                            <p>{{$service->description}}</p>
                            <div class="height10"></div>
                            <a href="/services_procedures/{{$service->id}}">- Learn More</a> </div>
                      </div>
                    </div>
					  @if($key%3==2)
                      </div>
                @endif
				  <?php $key++; ?>
              @endforeach
                  
				  </div>
                  <!-- end row -->
                </div>
					
		</section>
		
    
		
		<!-- Find Health Information
		============================================= -->
		
    	
        <!-- KPJ Advisor Series start
		============================================= -->	
		    <?php $set = Helper::hasSetting('parallax_image');?>	
	@if($set && $set->status) 
		<section class="about-sec text-center" data-stellar-background-ratio="0.3" @if(isset($set->details) &&$set->status )  style=" background: url('{{$set->details}}') repeat center top " @endif >
			
  <div class="container">  
      <?php $setting = Helper::hasSetting('kpj_background_text'); ?>
        <h1>{{($setting && $setting->status)?$setting->line2:''}}</h1>
        <p class="lead">{{($setting && $setting->status)?$setting->line3:''}}</p>
        
        <div class="row text-center">

        @foreach(Helper::getCategories() as $cat)
          
          <div class="col-md-4 col-xs-6">
            <div class="counter">
               <span class="quantity-counter3 highlight"><img src="{{$cat->image}}"></span>
               <a href="/kpj_advisor_series/{{$cat->id}}"><h6 class="counter-details">{{$cat->title}}</h6></a>
             </div>
          </div>
        @endforeach
        </div>
        
      </div>
			
		</section>
	@endif
	
	
		<!-- Promotion packages
		============================================= -->
		<section class="meet-the-doctors no-bg-img team-carousel">
			
			<div class="container">
			
				<h2 class="light bordered">Offer <span>Packages</span></h2>
				
				<div id="team-carousel" class="owl-carousel wrapper-padding-none">
					    @foreach(Helper::getPromotionpackages() as $pack)
                           
                                <div class="team-member">
                                    <div class="team-thumb">
                                       <img src="{{$pack->image}}" class="img-rounded" alt="{{$pack->alt}}">
                                        <div class="links">
											@if($pack->image_large)
												  <a href="{{$pack->image_large}}"></a>
											  @elseif($pack->pdf)
												  <a href="{{$pack->pdf}}"></a>
											  @elseif($pack->website)
											  	<a href="{{Helper::fix_link($pack->website)}}"></a>
											  @else
                                            <a href="/promotion_packages/{{$pack->id}}"></a>
												@endif
												<i class="fa fa-link"></i>
                                         </div>
                                    </div>
                                    <h5><a href="/promotion_packages/{{$pack->id}}">{{$pack->title}}</a></h5>
                                    <p>{{$pack->description}}</p>
                                    <div class="price-rating">
                                    	<p class="price"><b>@if($pack->sale_price != '') RM {{$pack->sale_price}} @endif</b></p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <a href="/promotion_packages/{{$pack->id}}">- VIEW DETAILS</a>
                                </div>
                  
                            
                           @endforeach
					
			  </div>

			</div>
			
		</section>
    
	
	
		<!-- Latest News
		============================================= -->
<section class="latest-news">
                
                    <div class="container">
                    
                        <div class="row">
                            
                            <div class="col-md-8">
                                
                                <h2 class="bordered light">Latest <span>Events</span></h2>
                                
                                <div class="row">
                                    
                                            
                                 @foreach($events as $key=>$ev)
                                      @if($key%2==0)
                                 <div class="col-md-5">
                            @else
                                 <div class="col-md-7">
                            @endif
                                        <article class="blog-item">
                                            <div class="blog-thumbnail">
                                                <img src="{{$ev->image}}" alt="KPJ Sentosa launches new name">
                                                <div class="blog-date"><p class="day">{{date('d', strtotime(Helper::changeDate($ev->date)))}}</p><p class="monthyear">{{date('M, Y', strtotime(Helper::changeDate($ev->date)))}}</p></div>
                                            </div>
                                            <div class="blog-content">
                                            <h4 class="blog-title"><a href="{{url('latest_events/'.'/'.$ev->id)}}">{{$ev->title}}</a></h4>
                                            <p>{{$ev->description}}</p>
                                            <a href="/latest_events/{{$ev->id}}" class="btn btn-danger btn-mini btn-rounded">READ MORE</a>
                                            </div>
                                        </article>



                                    </div>
                              @endforeach
                                </div>
                              
                                
                            </div>
                            
					
					
					<!-- Sidebar
					============================================= -->
					<aside class="col-md-4">
						
                        <!-- articles by doctors start -->
						<h2 class="bordered light">Articles by <span>Doctors</span></h2>
							<div class="what-doctor-say clearfix">
								<div id="meet-doctors-carousel" class="owl-carousel meet-doctors-carousel text-center">
									<div class="item">
									  <img src="{{asset('images/index/img_dr_andi.jpg')}}" class="img-circle img-thumbnail list-inline" alt="Dr Andi Anggeriana Andi Asri" title="">
										<h4>Kesedaran Penting Hindar Kanser Serviks<br /><span>Dr Andi Anggeriana Andi Asri <br/>(Gynae-Oncology)</span></h4>
										<p>Jangan pandang remeh jika didatangi darah haid lebih banyak dan berpanjangan daripada biasa. Dan jika telah menopaus... <a href="#">Read More</a></p>
                                        <p><a href="{{url('articles')}}" class="btn btn-danger btn-mini btn-rounded">View All</a></p>
									</div>
									<div class="item">
									  <img src="{{asset('images/index/img_dr_andi.jpg')}}" class="img-circle img-thumbnail list-inline" alt="Dr Andi Anggeriana Andi Asri" title="">
										<h4>Kesedaran Penting Hindar Kanser Serviks<br /><span>Dr Andi Anggeriana Andi Asri <br/>(Gynae-Oncology)</span></h4>
										<p>Jangan pandang remeh jika didatangi darah haid lebih banyak dan berpanjangan daripada biasa. Dan jika telah menopaus... <a href="#">Read More</a></p>
                                        <p><a href="#" class="btn btn-danger btn-mini btn-rounded">View All</a></p>
									</div>
                                    <div class="item">
									  <img src="{{asset('images/index/img_dr_andi.jpg')}}" class="img-circle img-thumbnail list-inline" alt="Dr Andi Anggeriana Andi Asri" title="">
										<h4>Kesedaran Penting Hindar Kanser Serviks<br /><span>Dr Andi Anggeriana Andi Asri <br/>(Gynae-Oncology)</span></h4>
										<p>Jangan pandang remeh jika didatangi darah haid lebih banyak dan berpanjangan daripada biasa. Dan jika telah menopaus... <a href="#">Read More</a></p>
                                        <p><a href="#" class="btn btn-danger btn-mini btn-rounded">View All</a></p>
									</div>
								</div>
							 
								
							</div><!-- end articles by doctor -->
                            
                            <!-- upcoming events start -->
                    <h2 class="bordered light">Upcoming <span>Events</span></h2>
						@include('common.events')

					  <h2 class="bordered light">Health <span>Calendar</span></h2>
						@include('common.health_calendar')
                            
                         
                                    <!-- end health calendar -->
                              
                              					
					</aside>
					
				</div>
				
			</div>
			
		</section>
    
	
	
		
    
	
	
	
		
    
    </div><!--end #content-index-->
    
    
	<div class="solid-row"></div>
    
@stop


@section('end_scripts')

	<script>
	
		(function () {
			
			// Revolution slider
			var revapi;
			revapi = jQuery('.tp-banner').revolution(
			{
				delay:9000,
				startwidth:1170,
				startheight:490,
				hideThumbs:200,
				fullWidth:"on",
				forceFullWidth:"on"
			});

			
		})();

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


   	<script type="text/javascript">
          $('.lem').removeClass('active')
          $('.lem_home').addClass('active')
    </script>

    
 @stop
