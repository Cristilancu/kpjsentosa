@extends('layouts.front')

@section('title')
    <title>Screening Packages Details</title>
  @stop

@section('content')

<section class="sub-page-banner12 text-center" data-stellar-background-ratio="0.3">
      <div class="overlay"></div>
      <div class="container">
      @if($setting = Helper::hasSetting('screening'))
                        {!!$setting->line1!!}
                    @else  
        <h1 class="entry-title">Screening &amp; Packages</h1>
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
    <!-- InstanceEndEditable -->
    <!-- Sub Page Content
			============================================= -->
    <!-- InstanceBeginEditable name="EditRegion2" -->
    <div id="sub-page-content" class="clearfix no-padding-bottom">
    	
				
				<!-- screening &amp; packages Start
				============================================= -->
				<div class="container">
					@if($setting = Helper::hasSetting('screening'))
                        {!!$setting->line2!!}
                    @else  
					<h2 class="light bordered main-title">Screening &amp; <span>Packages</span></h2>
					@endif
					<div class="panel-group" id="accordion">

						@foreach(Helper::getScreeningpackages() as $pack)
							  <div class="panel panel-default">
								<div class="panel-heading">
								  <h4 class="panel-title {{$pack->id==$id?'active':''}}">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse-{{$pack->id}}">
									  <span><i class="fa {{$pack->id==$id?'fa-plus fa-minus':'fa-plus'}}"></i></span><h4>{{$pack->title}}</h4></a>
								    </h4>
								</div>
								
								<div id="collapse-{{$pack->id}}" class="panel-collapse collapse {{$pack->id==$id?'in':''}}">
								  <div class="panel-body">
									<div class="media pull-right">
                                    	<div class="gallery-item-thumb">
											<span class="overlay"></span>
											<img src="{{$pack->image}}" width="467" class="img-rounded" alt="{{$pack->alt}}">
											<a href="{{$pack->image}}" class="hover-button-plus fancybox" data-fancybox-group="button" title="Wellness Screening Package 1"></a>
										</div>
                                    </div>
                                    
                                    <p>{{$pack->description}}</p>
                                    <div class="price-rating">
                                    	<p class="price">@if (!empty($pack->sale_price))<b>RM {{$pack->sale_price}}</b> @endif @if (!empty($pack->cost_price))<del>RM {{$pack->cost_price}}</del>@endif</p>
                                    </div>
                                    <hr>
                                    {!!$pack->details!!}
								  </div>
								</div>
							  </div><!-- end panel default -->
                              
							 @endforeach
						
							</div><!-- end accordion -->
					
                    
                    				
				
				</div><!-- end container -->
                
				
			@include('common.promotion')
       
	   
	   
	   

      
		
		
		</div>
    <!-- InstanceEndEditable -->
    <!--end sub-page-content-->
    
    
	<div class="solid-row"></div>
    
	@stop


	@section('end_scripts')

   <script type="text/javascript">
          $('.lem').removeClass('active')
          $('.lem_screening').addClass('active')

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
