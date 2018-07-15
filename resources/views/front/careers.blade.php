@extends('layouts.front')

 @section('title')
    <title>Careers</title>
  @stop

@section('content')

<!-- Sub Page Banner
			============================================= -->
		  <!-- InstanceBeginEditable name="EditRegion1" -->
          <section class="sub-page-banner4 text-center" data-stellar-background-ratio="0.3">
				
				<div class="overlay"></div>
				
				<div class="container">
				   @if($setting = Helper::hasSetting('careers'))
                        {!!$setting->line1!!}
                    @else 
					<h1 class="entry-title">Careers</h1>
				@endif
					<!--<p>Staff is eagerly awaiting to serve our patients and visitors with warm welcome and glowing smile.</p>-->
				</div>
				
			</section>
          <!-- InstanceEndEditable -->
    <!-- Sub Page Content
			============================================= -->
    <!-- InstanceBeginEditable name="EditRegion2" -->
    <div id="sub-page-content" class="no-padding-bottom clearfix">
    	
				
				<!-- patient transfer Start
				============================================= -->
			    <div class="container">
					@if($setting = Helper::hasSetting('careers'))
                        {!!$setting->line2!!}
                  @else  
					<h2 class="light bordered main-title">Job <span>Vacancies</span></h2>
                   @endif
                    <div class="row">
					
						<div class="col-md-7">
						
              @foreach($careers as $key=>$career)
							                           
                            <div class="panel-group" id="accordion">
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title {{$key==0?'active':''}}">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-{{$career->id}}">
                                              <span><i class="fa {{$key==0?'fa-minus fa-plus':'fa-plus'}}"></i></span>{!!$career->title!!}</a>
                                          </h4>
                                        </div>
                                        
                                        <div id="collapseOne-{{$career->id}}" class="panel-collapse collapse {{$key==0?'in':''}}">
                                          <div class="panel-body">
                                            {!!$career->description!!}
                                            
                                            {!!$career->requirements!!}
                                         
                                            {!!$career->footer_content!!}
                                            <p><a href="/careers/{!!$career->id!!}" class="btn btn-rounded btn-danger">Apply this job</a></p>
                                            
                                          </div>
                                        </div>
                                      </div><!-- end panel default -->
                                </div>
            @endforeach
            		
                            
					<div class="clearfix"> </div>
						</div><!-- end col-md-7 -->
						
						<div class="col-md-5">
						
							<div class="item">
								<img src="/images/careers/img.jpg" width="467" class="img-rounded" alt="Patient Transfer">
							</div>
						
						</div><!-- end col-md-5 -->
					
					</div><!-- end row -->
					
					
                    				
				
			  </div><!-- end container -->

	       @include('common.health_info')
            
    <!-- InstanceEndEditable -->
    <!--end sub-page-content-->
    
    
	<div class="solid-row"></div>
    

@stop