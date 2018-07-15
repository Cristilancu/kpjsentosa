@extends('layouts.front')

@section('title')
    <title>Offer Packages</title>
  @stop

@section('content')

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
    <div id="sub-page-content" class="clearfix">
				
				
                <!-- promotion &amp; packages
                ============================================= -->
                <section class="no-bg-img">
                    
                    <div class="container">
                     @if($setting = Helper::hasSetting('packages'))
                        {!!$setting->line2!!}
                    @else  
                        <h2 class="light bordered">Offer <span>Packages</span></h2>
                    @endif
                        <div class="wrapper-padding-none">
                            

                            @foreach(Helper::getPromotionpackages() as $pack)
                            <div class="col-md-3">
                                <div class="team-member">
                                    <div class="team-thumb">
                                       <img src="{{$pack->image}}" class="img-rounded" alt="{{$pack->alt}}">
                                        <div class="links">
                        @if($pack->image_large)
                          <a href="{{$pack->image_large}}">
                      @elseif($pack->pdf)
                          <a href="{{$pack->pdf}}">                 
                      @elseif($pack->website)                      
                      <a href="{{Helper::fix_link($pack->website)}}">
                      @else
                          <a href="/promotion_packages/{{$pack->id}}">
                      @endif <i class="fa fa-link"></i></a></a>
                                         </div>
                                    </div>
                                    <h5><a href="/promotion_packages/{{$pack->id}}">{{$pack->title}}</a></h5>
                                    <p>{{$pack->description}}</p>
                                    @if($pack->sale_price != null)
                                    <div class="price-rating">
                                    	<p class="price"><b>RM {{$pack->sale_price}}</b></p>
                                    </div>
                                    @endif
                                    <div class="clearfix"></div>
                                    <a href="/promotion_packages/{{$pack->id}}">- VIEW DETAILS</a>
                                </div>
                            </div><!-- end col-md-3 -->
                            
                           @endforeach
                           
                            
                            
                      </div>
        
                    </div>
                    
                </section>
			
			
			
			</div>
    <!-- InstanceEndEditable -->
    <!--end sub-page-content-->
    
    
	<div class="solid-row"></div>
    

@stop