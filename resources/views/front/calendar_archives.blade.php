@extends('layouts.front')


 @section('title')
    <title>Health Calendar</title>
  @stop

@section('content')

       <section class="sub-page-banner7 text-center" data-stellar-background-ratio="0.3">
            <div class="overlay"></div>
              <div class="container"> 
               @if($setting = Helper::hasSetting('calender'))
                        {!!$setting->line1!!}
                    @else 
                <h1 class="entry-title">Health Calendar</h1>
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
                            
                            <div class="col-md-8"> 
                     @if($setting = Helper::hasSetting('calender'))
                        {!!$setting->line2!!}
                    @else 
                                <h2 class="bordered light">Health <span>Calendar</span></h2>
                    @endif
                                <div class="row">
                                    
                                  @foreach($calenders as $key=>$cal)
                                    @if($key%2==0)
                                 <div class="col-md-5">
                            @else
                                 <div class="col-md-7">
                            @endif
                                        <article class="blog-item">
                                            <div class="blog-thumbnail">
                                                <img src="{{$cal->image}}" alt="">
                                                <div class="blog-date"><p class="day">{{date('d', strtotime(Helper::changeDate($cal->date)))}}</p><p class="monthyear">{{date('M, Y', strtotime(Helper::changeDate($cal->date)))}}</p></div>
                                            </div>
                                            <div class="blog-content">
                                            <h4 class="blog-title"><a href="/health_calendar/{{$cal->id}}">{{$cal->title}}</a></h4>
                                            <p>{{$cal->description}}</p>
                                            <a href="/health_calendar/{{$cal->id}}" class="btn btn-danger btn-mini btn-rounded">READ MORE</a>
                                            </div>
                                        </article>                                
                                    
                                </div>

                                    @endforeach

                                </div>
                            @if($calenders->total() > $calenders->count())
                                <div class="text-center">
                                  <a href="javascript:void(0)" class="btn btn-primary btn-rounded load_more" page='2' type="health_calendar">Load More Events <i class="fa fa-spinner"></i></a>
                                </div>
                            @endif
                                
                            </div>
                            
                            
                            <!-- Sidebar
                            ============================================= -->
                            <aside class="col-md-4">
                                
                                    
                                    <!-- Archives
                                    ============================================= -->
                                    <div class="sidebar-widget clearfix">
                                   @if($setting = Helper::hasSetting('calender'))
                        {!!$setting->line3!!}
                    @else 
                                        <h2 class="bordered light">View By <span>Month</span></h2>
                          @endif
                                <?php $i=date('Y');?>
                                  <div id='load_dates'>
                                        <div class="pull-left">
                                            <a href="javascript:void(0)" type="{{$i-1}}" class="btn btn-danger btn-mini btn-rounded" onclick="load_dates('{{$i-1}}')"><i class="fa fa-long-arrow-left"></i> {{$i-1}}</a>
                                        </div>
                                        <div class="pull-right">
                                           <a href="javascript:void(0)" type="{{$i+1}}" class="btn btn-danger btn-mini btn-rounded " onclick="load_dates('{{$i+1}}')"> {{$i+1}} <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="height10"></div>
                                        
                                        <ul class="archives">
                                      

                                      @for($d=12; $d>0; $d--)
                                        <?php $str = "$d/$i";?>

                                            <li><a href="{{Helper::getArchives('health_calender',$str)->count()?'/health_calendar/archives?date='.$str:'#.'}}"><i class="fa fa-long-arrow-right"></i>{{date('F', strtotime("$i-$d-01"))}} {{$i}}</a> ({{Helper::getArchives('health_calender',$str)->count()}})</li>
                                      @endfor
                                        </ul>
                                        
                                    </div>
                                    </div>
                                    
                               @if($setting = Helper::hasSetting('calender'))
                        {!!$setting->line4!!}
                    @else 
                                    <!-- latest news start -->
                                    <h2 class="bordered light">Latest <span>News</span></h2>
                      @endif
                                    <div class="panel-group" id="accordion">

                              @foreach(Helper::getNews(5) as $key=>$nw)
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title {{$key==0?'active':''}}">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-news-{{$nw->id}}">
                                              <span><i class="fa {{$key==0?'fa-minus fa-plus':'fa-plus'}}"></i></span>{{$nw->title}}
                                            </a>
                                          </h4>
                                        </div>
                                        
                                        <div id="collapseOne-news-{{$nw->id}}" class="panel-collapse collapse {{$key==0?'in':''}}">
                                          <div class="panel-body">
                                            <p>{!!$nw->description !!}</p>
                                            <a href="/news/{{$nw->id}}">- Read More</a>
                                          </div>
                                        </div>
                                      </div>
                              @endforeach
                                      
                                      <div class="clearfix margin-bottom-20"></div>
                                      <p class="text-center"><a href="/latest_news" class="btn btn-danger btn-mini btn-rounded">View All News</a></p>
                                      <div class="clearfix margin-bottom-40"></div>
                                      <!-- end latest news -->
                                       
                                    </div><!-- end accordion -->
                                    
                                    
                    @if($setting = Helper::hasSetting('calender'))
                        {!!$setting->line5!!}
                    @else
                                    
                                    <!-- upcoming events start -->
                                    <h2 class="bordered light">Upcoming <span>Events</span></h2>
                    @endif

                                    <div class="panel-group" id="accordion-visitor">
                            @foreach(Helper::getEvents(5) as $key=>$ev)
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title {{$key==0?'active':''}}">
                                            <a data-toggle="collapse" data-parent="#accordion-visitor" href="#collapseThree-ev-{{$ev->id}}">
                                              <span><i class="fa {{$key==0?'fa-minus fa-plus':'fa-plus'}}"></i></span>{{$ev->title}}
                                            </a>
                                          </h4>
                                        </div>
                                        
                                        <div id="collapseThree-ev-{{$ev->id}}" class="panel-collapse collapse {{$key==0?'in':''}}">
                                          <div class="panel-body">
                                            <p>{!!$ev->description!!}</p>
                                            <a href="/latest_events/{{$ev->id}}">- Read More</a>
                                          </div>
                                        </div>
                                      </div>
                             @endforeach
                                      
                                      <div class="clearfix margin-bottom-20"></div>
                                      <p class="text-center"><a href="/latest_events" class="btn btn-danger btn-mini btn-rounded">View All Events</a></p>
                                      <div class="clearfix margin-bottom-40"></div>
                                      <!-- end upcoming events -->
                                      
                                    </div><!-- end accordion -->
                                    
                                      
                                                        
                          </aside>
                            
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
  function load_dates(date){
       $.ajax({
          url:'/load_dates/'+date,
          success:function(response){
              $('#load_dates').html(response);
          }
      })
  }
     
</script>
@stop