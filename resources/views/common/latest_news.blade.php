   <div class="panel-group" id="accordion">


    @foreach(Helper::getNews(5) as $key=>$nw)
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title  {{$key==0?'active':''}}">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne_nw-{{$nw->id}}">
                                              <span><i class="fa {{$key==0?'fa-minus fa-plus':'fa-plus'}}"></i></span>{{$nw->title}}
                                            </a>
                                          </h4>
                                        </div>
                                        
                                        <div id="collapseOne_nw-{{$nw->id}}" class="panel-collapse collapse  {{$key==0?'in':''}}">
                                          <div class="panel-body">
                                            <p>{{$nw->short_description}}</p>
                                            <a href="/latest_news/{{$nw->id}}">- Read More</a>
                                          </div>
                                        </div>
                                      </div>
  @endforeach
                                      
                                      <div class="clearfix margin-bottom-20"></div>
                                      <p class="text-center"><a href="/latest_news" class="btn btn-danger btn-mini btn-rounded">View All News</a></p>
                                      <div class="clearfix margin-bottom-40"></div>
                                      <!-- end upcoming events -->
                                       
                                    </div><!-- end accordion -->
                                    