<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DateTime;
use DB;

use Illuminate\Http\Request;

class SaveScheduleController extends Controller {
     
      public function SaveSchedule(Request $request)
	{
		        dd($request->status0);
				$idd=$request->iddoctor;
				$datesch=$request->dateschedule;
				$appointment0=$request->start0.'-'.$request->end0;
				$appointment1=$request->start1.'-'.$request->end1;
				$appointment2=$request->start2.'-'.$request->end2;
                
                if($request->status0)
                {
				DB::table('schedule')->insert(
					    ['doctor_id' => $idd, 'status' => $request->status0,'max_patients'=>$request->maxp0,'appointment_time'=>$appointment0,'date'=>$datesch]
					  );

				  return 'Infomation Save Correctly'
				}

				if($request->status1)
                {
                	DB::table('schedule')->insert(
					    ['doctor_id' => $idd, 'status' => $request->status1,'max_patients'=>$request->maxp1,'appointment_time'=>$appointment1,'date'=>$datesch]
					  );
				}

				if($request->status2)
				{
					DB::table('schedule')->insert(
					    ['doctor_id' => $idd, 'status' => $request->status2,'max_patients'=>$request->maxp2,'appointment_time'=>$appointment2,'date'=>$datesch]
					);
				}


	            if($request->startmon1&&$request->status3)
	            {
			         if($request->endmon1)
			         {
	                   $dateend=$request->endmon1;
			         }else{
	                   $dateend=$request->startmon1;
			         }

			        $this->period($idd,$request->status3,$request->startmon1,$dateend);
	            
	            }

	            if($request->startmon2&&$request->status3)
	            {
			        if($request->endmon2)
			         {
	                   $dateend=$request->endmon2;
			         }else{
	                   $dateend=$request->startmon2;
			         }

			        $this->period($idd,$request->status3,$request->startmon2,$dateend);
	            
	            }

	            if($request->startmon3&&$request->status3)
	            {
			        if($request->endmon2)
			         {
	                   $dateend=$request->endmon3;
			         }else{
	                   $dateend=$request->startmon3;
			         }

			        $this->period($idd,$request->status3,$request->startmon3,$dateend);
	            
	            }

	}


	public function period ($idd,$status,$datein,$dateend){
       
        $i=0;
        while (1) {
		            
		            
		         	$sum='+'.$i.' day';
		         	$newdate = strtotime ($sum, strtotime ( $datein ) ) ;

		         	DB::table('schedule')->insert(
					          ['doctor_id' => $idd, 'status' =>$status,'date'=>$newdate]
					        );

			         	if($dateend==$newdate)
			         	{
			         		break;
			             
			            }

			         $i++;
		         }

	}


}