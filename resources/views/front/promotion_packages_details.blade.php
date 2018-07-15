@extends('layouts.front')

@section('title')
    <title>Offer Packages Details</title>
  @stop
@section('content')

   <!-- Sub Page Banner
			============================================= -->
		  <!-- InstanceBeginEditable name="EditRegion1" -->
          <section class="sub-page-banner7 text-center" data-stellar-background-ratio="0.3">
            <div class="overlay"></div>
              <div class="container"> 
                 @if($setting = Helper::hasSetting('packages'))
                        {!!$setting->line1!!}
                    @else 
                <h1 class="entry-title">Offer Packages</h1>

                	@endif
                <!--<p>Staff is eagerly awaiting to serve our patients and visitors with warm welcome and glowing smile.</p>-->
              </div>
            </section>
          <!-- InstanceEndEditable -->
    <!-- Sub Page Content
			============================================= -->
    <!-- InstanceBeginEditable name="EditRegion2" -->
    <div id="sub-page-content" class="clearfix no-padding-bottom">
    	
				
				<!-- promotion packages Start
				============================================= -->
				<div class="container">
					   @if($setting = Helper::hasSetting('packages'))
                        {!!$setting->line2!!}
                    @else 
					<h2 class="light bordered main-title">Offer <span>Packages</span></h2>
					@endif
					<div class="panel-group" id="accordion">
							  
						@foreach(Helper::getPromotionpackages() as $pack)
                              <div class="panel panel-default">
								<div class="panel-heading">
								  <h4 class="panel-title {{$pack->id==$id?'active':''}}">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse-{{$pack->id}}">
									  <span><i class="fa fa-plus fa-minus"></i></span><h4>{{$pack->title}}</h4></a>
								    </h4>
								</div>
								
								<div id="collapse-{{$pack->id}}" class="panel-collapse collapse {{$pack->id==$id?'in':''}}">
								  <div class="panel-body">
									<div class="media pull-right">
                                    	<div class="gallery-item-thumb">
											<span class="overlay"></span>
											<img src="{{$pack->image}}" width="467" class=" img-rounded" alt="{{$pack->alt}}">
											<a href="{{$pack->image}}" class="hover-button-plus fancybox" data-fancybox-group="button" title="{{$pack->title}}"></a>
										</div>
                                       
                                    </div>
                                    <p>{{$pack->description}}</p>
									  @if($pack->sale_price != null)
                                    <div class="price-rating">
                                    	<p class="price"><b>RM {{$pack->sale_price}}</b></p>
                                    </div>
									  @endif
                                    <hr>
                                  
                                  	{!! $pack->details!!}
                                    <div class="height20"></div>
                                   
								  </div>
								</div>
							  </div><!-- end panel default -->
                              
                           @endforeach
						
							</div><!-- end accordion -->
					
                    
                    				
				
				</div><!-- end container -->
                
        			
			@include('common.screening')
    <!--end sub-page-content-->
    
    
	<div class="solid-row"></div>
    
	

@stop