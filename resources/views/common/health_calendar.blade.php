     <!-- health calendar start -->
                                    
                                    <div class="panel-group" id="accordion-visitor">

                                    @foreach(Helper::getCalenders() as $key=>$cal)
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title {{$key==0?'active':''}}">
                                            <a data-toggle="collapse" data-parent="#accordion-visitor" href="#collapse-{{$cal->id}}">
                                              <span><i class="fa {{$key==0?'fa-minus fa-plus':'fa-plus'}}"></i></span>{{$cal->title}}
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapse-{{$cal->id}}" class="panel-collapse collapse {{$key==0?'in':''}}">
                                          <div class="panel-body">
                                            {!!$cal->details!!}
                                            <a href="/health_calendar/{{$cal->id}}">- Read More</a>
                                          </div>
                                        </div>
                                      </div>
                                     @endforeach
                                    </div><!-- end accordion -->
                                    