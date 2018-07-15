@extends('layouts.front')

@section('title')
    <title>Screening Packages</title>
  @stop

@section('content')
	    <!-- InstanceBeginEditable name="EditRegion1" -->
    <section class="sub-page-banner11 text-center" data-stellar-background-ratio="0.3">
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
    <div id="sub-page-content" class="clearfix">
      <!-- screening &amp; packages
                ============================================= -->
      <section class="no-bg-img">
        <div class="container">
         @if($setting = Helper::hasSetting('screening'))
                        {!!$setting->line2!!}
                    @else  
          <h2 class="light bordered">Screening &amp; <span>Packages</span></h2>
          @endif
          <div class="wrapper-padding-none">
 
          @foreach(Helper::getScreeningpackages() as $key=>$pack)
            <div class="col-md-3">
              <div class="team-member">
                <div class="team-thumb"> <img src="{{$pack->image?$pack->image:'images/screening_packages/img_not_available.jpg'}}" class="img-rounded" alt="{{$pack->alt}}">
                    <div class="links">  
                        @if($pack->image_large)
                          <a href="{{$pack->image_large}}">
                      @elseif($pack->pdf)
                          <a href="{{$pack->pdf}}">                 
                      @elseif($pack->website)                      
                      <a href="{{Helper::fix_link($pack->website)}}">
                      @else
                          <a href="/screening_packages/{{$pack->id}}">
                      @endif <i class="fa fa-link"></i></a> </div>
                </div>
                <h5><a  href="/screening_packages/{{$pack->id}}">{{$pack->title}}</a></h5>
                <p>{{$pack->description}} </p>
                <div class="price-rating">
                  <p class="price"><b>{{$pack->sale_price}}</b><del>{{$pack->cost_price}}</del></p>
                </div>
                <div class="clearfix"></div>
                <a  href="/screening_packages/{{$pack->id}}">- VIEW DETAILS</a> </div>
            </div>
          

         @if($key%4==3)
            <div class="clearfix margin-bottom-30"></div>
         @endif


        @endforeach
            
           
            
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