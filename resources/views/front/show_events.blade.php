@extends('layouts.front')

@section('title')
    <title>Show Events</title>
  @stop

@section('content')
  <!-- InstanceBeginEditable name="EditRegion1" -->
          <section class="sub-page-banner5 text-center" data-stellar-background-ratio="0.3">
            <div class="overlay"></div>
              <div class="container">
                      @if($setting = Helper::hasSetting('events'))
                        {!!$setting->line1!!}
                    @else 
                <h1 class="entry-title">Latest Events</h1>
                  @endif
                <!--<p>Staff is eagerly awaiting to serve our patients and visitors with warm welcome and glowing smile.</p>-->
              </div>
            </section>
          <!-- InstanceEndEditable -->
    <!-- Sub Page Content
			============================================= -->
    <!-- InstanceBeginEditable name="EditRegion2" -->
    <div id="sub-page-content" class="clearfix">
				
				
                <!-- Latest News
                ============================================= -->
                <section class="latest-news">
                
                    <div class="container">
                    
                        <div class="row">
                            
                            <div class="col-md-8 blog-wrapper clearfix">
						        @if($setting = Helper::hasSetting('events'))
                        {!!$setting->line2!!}
                    @else 	
                                <h2 class="bordered light">Latest <span>Events</span></h2>
                    @endif        
                                <article class="blog-item blog-full-width blog-detail">
                                    
                                    
                                    <h4 class="blog-title">{{$event->title}}</h4>
                                    <div class="blog-thumbnail">
                                        <img src="{{$event->image}}" alt="{{$event->alt}}">
                                        <div class="blog-date"><p class="day">{{date('d', strtotime(Helper::changeDate($event->date)))}}</p><p class="monthyear">{{date('M, Y', strtotime(Helper::changeDate($event->date)))}}</p></div>
                                    </div>
                                    
                                    	{!!$event->details!!}   
                                                
                                    
                                                
                                </article>
                                
         @if($previous=Helper::get_previous('event',$event->id))
                                <div class="pull-left">
                                	<a href="/events/{{$previous->id}}" class="btn btn-danger btn-mini btn-rounded"><i class="fa fa-long-arrow-left"></i> Previous Event</a>
                                </div>
                        @endif

                        @if($next=Helper::get_next('event',$event->id))
                                <div class="pull-right">
                                   <a href="/events/{{$next->id}}" class="btn btn-danger btn-mini btn-rounded">Next Event <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                        @endif

                                
                                
                                
                                 
                            </div><!-- end col-md-8 -->
                            
                            
                            <!-- Sidebar
                            ============================================= -->
                     <aside class="col-md-4">
                                
                                    
                                    <!-- Archives
                                    ============================================= -->
                                    <div class="sidebar-widget clearfix">
                                  @if($setting = Helper::hasSetting('events'))
                        {!!$setting->line3!!}  
                                 @else
                                        <h2 class="bordered light">Event <span>Archives</span></h2>
                        @endif
                                          <ul class="archives">
                     <?php $d = Helper::getLatestDate('event')?Helper::getLatestDate('event'): (int) date('Y');?>
                                          @for($i=$d; $i>=2010; $i--)
                                            <li><a href="{{Helper::getArchives('event',$i)->count()?'/latest_events/archives/'.$i:'#'}}"><i class="fa fa-long-arrow-right"></i>{{$i}}</a> ({{Helper::getArchives('event',$i)->count()}})</li>
                                          @endfor
                                        </ul>
                                        
                                    </div>
                                    
                                    
                                    <!-- upcoming events start -->
                           @if($setting = Helper::hasSetting('events'))
                        {!!$setting->line4!!}
                            @else
                                    <h2 class="bordered light">Latest <span>News</span></h2>
                            @endif
                                  @include('common.latest_news')

                                    
                                    <!-- health calendar start -->
                               @if($setting = Helper::hasSetting('events'))
                        {!!$setting->line5!!}
                              @else
                                    <h2 class="bordered light">Health <span>Calendar</span></h2>
                               @endif
                                @include('common.health_calendar')
                                    <!-- end health calendar -->
                                      
                                                        
                          </aside>
                        </div>
                        
                    </div>
                    
                </section>
			
			
			
			</div>
    <!-- InstanceEndEditable -->
    <!--end sub-page-content-->
    
    
	<div class="solid-row"></div>
    
@stop