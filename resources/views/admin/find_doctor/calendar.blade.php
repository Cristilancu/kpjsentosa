    <!-- <thead>
        <tr>
            <td><a id="before" name="<?php echo $year.'-'.$meesactual.'-01'; ?>" class="arrows" data-toggle="tooltip" data-placement="top" title="Last Month"><h2><i class="fa fa-angle-double-left"></i></h2></a></td>
            <td colspan="5" name="{{$iddoc}}" id="doc" ><h2><?php echo $monthName.' '.$year ?></h2></td>
            <td><a id="next" name="<?php echo $year.'-'.$meesactual.'-01'; ?>" class="arrows" data-toggle="tooltip" data-placement="top" title="Next Month"><h2><i class="fa fa-angle-double-right"></i></h2></a></td>
        </tr>
        <tr class="days">
            <th>SUN</th>
            <th>MON</th>
            <th>TUE</th>
            <th>WED</th>
            <th>THU</th>
            <th>FRI</th>
            <th>SAT</th>
        </tr>
    </thead>
    <tbody>
    	<?php for ($j=0; $j <$jf; $j++) { ?>
    		<tr>
    	<?php for ($q=($j*7);$q<(($j*7)+7) ; $q++) { ?>
    	     <div id="modal-booked-patients" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade modal-slide-in-right">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">View All Booked Patients</h4>
                            </div>
                            <div class="modal-body">

                                <div class="row" id="modaldates" >

                                </div>
                                <hr>
                                <div class="text-center">
                                    <a href="#" data-dismiss="modal" class="btn btn-default">Close &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </div>
            <div id='modaledit'>

            </div>
            <?php if($mes[$q]['dia']):

                    if($mes[$q]['statusdoc'])
                    {
                         switch ($mes[$q]['statusdoc']) {
                             case 'Available':
                                 $clastatus='date-numer';
                                 $clastatus2='text-success';
                                 break;
                             case 'Not Available':
                                 $clastatus='date-numer-full';
                                 $clastatus2='text-warning';
                                 break;
                             case 'No Clinic':
                                 $clastatus='date-numer-info';
                                 $clastatus2='text-info';
                                 break;
                             case 'Doctor on Leave':
                                 $clastatus='date-numer-leave';
                                 $clastatus2='text-violet';
                                 break;

                            case 'Appointment Full':
                                 $clastatus='date-numer-danger';
                                 $clastatus2='text-danger';
                                 break;

                             default:
                                 $clastatus='date-numer';
                                 $clastatus2='text-success';

                                 break;
                         }
                    }else{
                       $clastatus='date-numer';
                        $clastatus2='text-success';

                    }
            ?>

            <?php
                        if($mes[$q]['dia']<10) {
                            $m='0'.$mes[$q]['dia'];
                        }else{
                            $m=$mes[$q]['dia'];
                        }

                        $thisDay = $year.'-'.$meesactual.'-'.$m;
                        ?>
    	         <td width="14%">
                    <a href="#" data-toggle="modal">
                        <span class="{{$clastatus}} modal-edit-schedule" name="{{$iddoc}}" id="{{ $thisDay }}" data-toggle="tooltip" data-placement="top" title="{{ $thisDay }}">
                            {{$mes[$q]['dia']}}
                        </span>
                        <br/>
                    </a>
                    <br/>
                    <a href="#" data-toggle="modal">
                        <span id="modal-booked-patients" name="{{ $thisDay }}" class="{{$clastatus2}}" data-toggle="tooltip" data-placement="top" title="View Booked Patients">
                        <?php
                            $booked = \App\Appointment::where('status',1)->where('doctor_id',$doctor->id)->where('appointment_date', date('Y-m-d', strtotime($thisDay)))->count();

                            if($booked == 0 && !$mes[$q]['statusdoc']) {
                                echo "Available";
                            } elseif($booked > 0 && !$mes[$q]['statusdoc']) {
                                echo 'Booked: '.$booked;
                            }else{
                                echo $mes[$q]['statusdoc'];
                            }
                            ?>
                        </span>
                    </a>
                </td>
    	     <?php else: ?>
    	        <td></td>
    	     <?php endif ?>
    	<?php if($q==sizeof($mes)-1){break;}  } ?>
    		</tr>
    	<?php }?>
    </tbody> -->
<div class="row" id="details">

    <div class="col-md-12">

        <?php
            $firstday = (int) date("N", strtotime(sprintf("%s-%s-01",$year,$month)));
            $lastday = (int) date("t", strtotime(sprintf("%s-%s-01",$year,$month)));
            $month_name = date("F", strtotime(sprintf("%s-%s-01",$year,$month)));

            if($month == '12'){
                $next_month = '01';
                $next_month_year = $year+1;
            } else {
                $next_month = sprintf("%02d",$month+1);
                $next_month_year = $year;
            }

            if($month == '01'){
                $prev_month = '12';
                $prev_month_year = $year-1;
            } else {
                $prev_month = sprintf("%02d",$month-1);
                $prev_month_year = $year;
            }
        ?>
        <hr>
        <div class="clearfix"></div>

        <div class="book-calendar table-responsive" id="calender">
            <table class="table1">
                <thead>
                    <tr>
                        <td><a href="?m={{$prev_month}}&y={{$prev_month_year}}#schedule" class="arrows" data-toggle="tooltip" data-placement="top" title="Last Month"><h2><i class="fa fa-angle-double-left"></i></h2></a></td>
                        <td colspan="5"><h2>{{$month_name.' '.$year}}</h2></td>
                        <td><a href="?m={{$next_month}}&y={{$next_month_year}}#schedule" class="arrows" data-toggle="tooltip" data-placement="top" title="Next Month"><h2><i class="fa fa-angle-double-right"></i></h2></a></td>
                    </tr>
                    <tr class="days">
                        <th>SUN</th>
                        <th>MON</th>
                        <th>TUE</th>
                        <th>WED</th>
                        <th>THU</th>
                        <th>FRI</th>
                        <th>SAT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $day = 1; ?>
                    <tr>
                    <?php


                    ?>
                        @for($i=0;$i<$firstday;$i++)

                    <?php
                    $sawsan[] = $lastday;
                    $sawsan2 = count($sawsan);
                    if($sawsan2 == 7){
                    //$style = 'style="display:none !important"';
                    echo'<style>
                    td.passdate.nextmonth{
                    display:none!important;
                    }
                    </style>';

                    }
                    ?>


                    <td width="14%" class="passdate nextmonth"><div class="margin-bottom-10">
                    </div><?php

                    echo $lastday-1;

                     ?></td>


                    <?php

                    ?>

                    <?php $day++?>
                                                            @endfor

                    <?php

                    ?>
                        <?php for($d = 1; $d <= $lastday; $d++,$day++ ):?>
                            <?php
                                $appointmentdate = sprintf("%s-%02d",date('Y-m'),$d);
                                $strdate = sprintf("%02d %s",$d,date('F, Y'));
                                switch($day){
                                    case 1: $dayname = 'Sunday'; break;
                                    case 2: $dayname = 'Monday'; break;
                                    case 3: $dayname = 'Tuesday'; break;
                                    case 4: $dayname = 'Wednesday'; break;
                                    case 5: $dayname = 'Thursday'; break;
                                    case 6: $dayname = 'Friday'; break;
                                    case 7: $dayname = 'Saturday'; break;
                                    default: $dayname = ''; break;
                                }

                                $booked_count = \App\Appointment::where('status',1)->where('doctor_id',$iddoc)->where('appointment_date',sprintf("%s-%02d-%02d",$year,$month,$d))->count();

                                $booked_str = $booked_count ? "Booked: $booked_count" : "Available";
                            ?>
                            <td width="14%"><a href="#calender" data-toggle="modal" data-target="#modal-book" data-strdate="{{$strdate}}" data-dayname="{{$dayname}}" data-appointmentdate="{{$appointmentdate}}"><span class="date-numer" id="{{$d}}" data-toggle="tooltip" data-placement="top" title="Available!">{{$d}}</span><br/></a><br/> {{$booked_str}}</td>
                            @if($day%7==0)
                        </tr>
                        <tr>
                            @endif
                        <?php endfor;?>
                        
                    </tr>
                </tbody>

            </table>
        </div>

    </div>
</div>