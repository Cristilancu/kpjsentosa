@extends('layouts.front')

@section('title')
    <title>{{$news->title}}</title>
  @stop

@section('content')

  <!-- InstanceBeginEditable name="EditRegion1" -->
          <section class="sub-page-banner1 text-center" data-stellar-background-ratio="0.3">
            <div class="overlay"></div>
              <div class="container"> 
               @if($setting = Helper::hasSetting('news'))
                        {!!$setting->line1!!}
                    @else 
                <h1 class="entry-title">Latest News</h1>
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
							
                                <h2 class="bordered light">News <span>Details</span></h2>
                                
                                <article class="blog-item blog-full-width blog-detail">
                                    
                                    
                                    <h4 class="blog-title">{{$news->title}}</h4>
                                    <div class="blog-thumbnail">
                                        <img alt="{{$news->alt}}" src="{{$news->image}}">
                                        <div class="blog-date"><p class="day">{{date('d', strtotime(Helper::changeDate($news->date)))}}</p><p class="monthyear">{{date('M, Y', strtotime(Helper::changeDate($news->date)))}}</p></div>
                                    </div>
                                    
                                    <div class="blog-content">
                                    		{!! $news->details !!}         
                                    </div>
                          
                                </article>
                                
         
         				@if($previous=Helper::get_previous('news',$news->id))
                                <div class="pull-left">
                                	<a href="/news/{{$previous->id}}" class="btn btn-danger btn-mini btn-rounded"><i class="fa fa-long-arrow-left"></i> Previous News</a>
                                </div>
                        @endif

                        @if($next=Helper::get_next('news',$news->id))
                                <div class="pull-right">
                                   <a href="/news/{{$next->id}}" class="btn btn-danger btn-mini btn-rounded">Next News <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                        @endif
 
                                
                                
                                
                                
                                
                            </div><!-- end col-md-8 -->
                            
                                     <aside class="col-md-4">
                                
                                    
                                    <!-- Archives
                                    ============================================= -->
                                    <div class="sidebar-widget clearfix">
                                        
                                          @if($setting = Helper::hasSetting('news'))
                        {!!$setting->line3!!}
                        @else
                                        <h2 class="bordered light">News <span>Archives</span></h2>
                                      @endif
                                        
                                         
                                        <ul class="archives">
                                          <?php $d = Helper::getLatestDate('news')?Helper::getLatestDate('news'): (int) date('Y');?>
                                          @for($i=$d; $i>=2010; $i--)
                                            <li><a href="{{Helper::getArchives('news',$i)->count()?'/latest_news/archives/'.$i:'#'}}"><i class="fa fa-long-arrow-right"></i>{{$i}}</a> ({{Helper::getArchives('news',$i)->count()}})</li>
                                          @endfor
                                         
                                           
                                        </ul>
                                        
                                    </div>
                                    
                                     
                                    <!-- upcoming events start -->
                                     @if($setting = Helper::hasSetting('news'))
                        {!!$setting->line4!!}
                          @else
                                    <h2 class="bordered light">Upcoming <span>Events</span></h2>
                                  @endif
                           
                           @include('common.events')
                                    
                                    <!-- health calendar start -->
                                  @if($setting = Helper::hasSetting('news'))
                        {!!$setting->line5!!}
                            @else
                                    <h2 class="bordered light">Health <span>Calendar</span></h2>
                            @endif
                             

                             @include('common.health_calendar')
                                    
                                    <!-- end health calendar -->
                                      
                                                        
                            </aside>
                            
                            <!-- Sidebar
                            ============================================= -->
                         
                            
                        </div>
                        
                    </div>
                    
                </section>
			
			
			
			</div>
    <!-- InstanceEndEditable -->
    <!--end sub-page-content-->
    
    
	<div class="solid-row"></div>
@stop