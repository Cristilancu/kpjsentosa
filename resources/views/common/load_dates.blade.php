    <?php $i=$date;?>

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