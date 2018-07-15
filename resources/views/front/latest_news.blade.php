@extends('layouts.front')


@section('title')
    <title>Latest News</title>
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

 <div id="sub-page-content" class="clearfix">
				 
				
                <!-- Latest News
                ============================================= -->
                <section class="latest-news">
                
                    <div class="container">
                    
                        <div class="row">
                            
                            <div class="col-md-8">
                           @if($setting = Helper::hasSetting('news'))
                        {!!$setting->line2!!}
                    @else       
                                <h2 class="bordered light">Latest <span>News</span></h2>
                      @endif
                                <div class="row" id="load_data">
                                    
                             
                                     @foreach($news as $key=>$nw)

                            @if($key%2==0)
                                 <div class="col-md-5">
                            @else
                                 <div class="col-md-7">
                            @endif
                                        <article class="blog-item">
                                            <div class="blog-thumbnail">
                                                <img src="{{$nw->image}}">
                                                <div class="blog-date"><p class="day">{{date('d', strtotime(Helper::changeDate($nw->date)))}}</p><p class="monthyear">{{date('M, Y', strtotime(Helper::changeDate($nw->date)))}}</p></div>
                                            </div>
                                            <div class="blog-content">
                                                        <h4 class="blog-title"><a href="news/{{$nw->id}}">{{$nw->title}}</a></h4>
                                            <p>{{$nw->short_description}}</p>
                                            <a href="/news/{{$nw->id}}" class="btn btn-danger btn-mini btn-rounded">READ MORE</a>
                                            </div>
                                        </article>
                                                                             
                                        
                                    </div>
                                @endforeach
                                    
                                </div>
                            @if( $news->total() > $news->count())
                                     <div class="text-center">
                                  <a href="javascript:void(0)" class="btn btn-primary btn-rounded load_more" page='2' type="news">Load More Events <i class="fa fa-spinner"></i></a>
                                </div>
                            @endif
                            </div>
                            
                            
                            <!-- Sidebar
                            ============================================= -->
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
                            
                            
                        </div>
                        
                    </div>
                    
                </section>
			
			
			
			</div>
    <!-- InstanceEndEditable -->
    <!--end sub-page-content-->
    
    
	<div class="solid-row"></div>



@stop