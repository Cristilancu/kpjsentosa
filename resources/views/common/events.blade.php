     <!-- upcoming events start -->

                         <div class="panel-group" id="accordion">
                                  
                              @foreach(Helper::getEvents(5) as $key=>$event)
                                  
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title  {{$key==0?'active':''}}">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse-event-{{$event->id}}">
                                              <span><i class="fa {{$key==0?'fa-minus fa-plus':'fa-plus'}}"></i></span>{{$event->title}}
                                            </a>
                                          </h4>
                                        </div>
                                        
                                        <div id="collapse-event-{{$event->id}}" class="panel-collapse collapse {{$key==0?'in':''}}">
                                          <div class="panel-body">
                                            <p>{{$event->description}}</p>
                                            <a href="/latest_events/{{$event->id}}">- Read More</a>
                                          </div>
                                        </div>
                                      </div>
                              @endforeach
                                    
                                      <!-- end upcoming events -->
                                      
                                    </div><!-- end accordion -->
                                      <div class="clearfix margin-bottom-20"></div>
                              <p class="text-center"><a href="/latest_events" class="btn btn-danger btn-mini btn-rounded">View All Events</a></p>
                              <div class="clearfix margin-bottom-40"></div>