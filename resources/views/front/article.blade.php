@extends('layouts.front')



 @section('title')
    <title>KPJ Advisor series</title>
  @stop

  @section('content')
  <!-- Sub Page Banner
			============================================= -->
		  <!-- InstanceBeginEditable name="EditRegion1" -->
          <section class="sub-page-banner9 text-center" data-stellar-background-ratio="0.3">
            <div class="overlay"></div>
              <div class="container">    @if($setting = Helper::hasSetting('category'))
                        {!!$setting->line1!!}
                    @else 
                <h1 class="entry-title">KPJ Advisor Series</h1>
                 @endif
                <!--<p>Staff is eagerly awaiting to serve our patients and visitors with warm welcome and glowing smile.</p>-->
              </div>
            </section>
          <!-- InstanceEndEditable -->
    <!-- Sub Page Content
			============================================= -->
    <!-- InstanceBeginEditable name="EditRegion2" -->
    
    <div id="sub-page-content" class="no-padding-bottom clearfix">
      
      
      <!-- find health information Start
		============================================= -->
      <section class="no-bg-img clearfix">
                <div class="container">
                
                    
                    <div class="col-md-12">
                      <!-- end col-md-6-->
                         
                      {!! $kpj->slug!!}                 

                      {!! $kpj->details !!}  
                      
                    </div><!-- end col-md-12 -->
                    <div class="clearfix"></div>
                      @if($setting = Helper::hasSetting('category'))
                        {!!$setting->line2!!}
                    @else 
                  <h2 class="light bordered">Find <span>Health Information</span></h2>
                  @endif
                  <div class="row">
                    <div class="col-md-12">
                      <h5><span>Filter Topics by Letters</span></h5>
    
                        <?php $letters = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','0','P','Q','R','S','T','U','V','W','X','Y','Z'];
                                    ?>

                                    @foreach($letters as $key=>$value)

                      <a href="/search?search={{$value}}" class="btn btn-rounded btn-danger btn-sm">{{$value}}</a> 
                      @endforeach
                      <div class="height20"></div>
                      
                    </div><!-- end col-md-12 -->
                   </div>
                    
                   
                    
                    
                    
                    
                  </div>
                  <!-- end row -->
                </div>
                <!-- end container -->

              </section>

      <div class="height40"></div>
      
      <!-- KPJ Advisor Series start
		============================================= -->		
		<section class="about-sec text-center" data-stellar-background-ratio="0.3">
			
  <div class="container">  
      <?php $setting = Helper::hasSetting('kpj_background_text'); ?>
        <h1>{{$setting?$setting->line2:'KPJ Advisor Series'}}</h1>
        <p class="lead">{{$setting?$setting->line3:'Sample text, sample text, sample text, sample text. Sample text, sample text, sample text, sample text. Sample text, sample text, sample text, sample text.'}}</p>
        
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
      
      
    </div>
    <!-- InstanceEndEditable -->
    <!--end sub-page-content-->
    
    
	<div class="solid-row"></div>
    
  @stop