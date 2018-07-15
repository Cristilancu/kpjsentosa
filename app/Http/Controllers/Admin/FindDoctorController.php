<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\doctor;
use App\schedule;
use App\service;
use App\setting;
use App\Country;
use App\Patient;
use App\User;
use App\Appointment;
use DateTime;
use DB;
use Session;

use Illuminate\Http\Request;

class FindDoctorController extends Controller {

  public function getFindDoctorList()
  {
    //$doctors = doctor::all();
                $doctors = doctor::orderBy('id', 'DESC')->get();
    


    return view('admin.find_doctor.list', compact('doctors'));
  }

  public function getFindDoctorNew()
  {
    $services = service::where('status',1)->get();
    return view('admin.find_doctor.new', compact('services'));
  }

  public function postFindDoctorNew(Request $request)
  {
    // return $request->all();
     $this->validate($request, [
          'profile_status' => 'sometimes',
      'profile_consultant_name' => 'required',
      'profile_service' => 'required|exists:services,id',
      // 'profile_speciality' => 'required',
      'profile_degrees' => 'required',
      'profile_experience' => 'required',
      'profile_consultant_image' => 'required|image|mimes:jpeg,png|min:1|max:500',
      'profile_details' => 'required',
      'profile_clinic_hours' => 'required',
      'profile_consultant_type' => 'required',
      'profile_consultant_image_alt_text' => 'required',
      'profile_enable_link' => 'required'
      ],[
      'profile_status.sometimes' => 'The Status field is selected.',
      'profile_consultant_name.required' => 'The Consultant Name field is required.',
      'profile_service.required' => 'The Specialty field is required.',
      'profile_service.exists' => 'The Specialty already exists.',
      'profile_degrees.required' => 'The Degrees field is required.',
      'profile_experience.required' => 'The Experince field is required.',
      'profile_consultant_image.required' => 'The Consultant Image field is required.',
      'profile_consultant_image.image' => 'The Consultant Image must be an image.',
      'profile_details.required' => 'The Details is required.',
      'profile_clinic_hours.required' => 'The Clinic Hours is required.',
      'profile_consultant_type.required' => 'The Consultant Type is required.',
      'profile_consultant_image_alt_text.required' => 'The Consultant Image Alt Text is required.',
      'profile_enable_link.required' => 'The Enable Link is required.',
      ]
      );

    $doctor = new doctor();

    // if user choose a file, replace the old one //
    if( $request->hasFile('profile_consultant_image') ){
      $file = $request->file('profile_consultant_image');
      $destination_path = 'images/find_doctor/';
      $filename = str_random(6).'_'.$file->getClientOriginalName();
      $file->move(public_path() .'/'. $destination_path, $filename);
      $doctor->image = $destination_path . $filename;
    }
      // return public_path() .'/'. $destination_path.$filename;

    // replace old data with new data from the submitted form //
    $doctor->status = ($request->has('profile_status') && $request->profile_status == 'on'?1:0);
    $doctor->name = $request->profile_consultant_name;
    $doctor->service_id = $request->profile_service;
    $doctor->degrees = $request->profile_degrees;
    $doctor->experience = $request->profile_experience;
    // $doctor->image = $request->profile_consultant_image;
    $doctor->details = $request->profile_details;
    $doctor->clinic_hours = $request->profile_clinic_hours;
    $doctor->type = $request->profile_consultant_type;
    $doctor->image_alt_text = $request->profile_consultant_image_alt_text;
    $doctor->enable_link = $request->profile_enable_link;
    $doctor->save();

    return redirect('/admin/find_doctor_list')->with('message', 'The information has been saved/updated successfully.');
  }

  public function getFindDoctorEdit($id,Request $request)
  {
    $doctor = doctor::find($id);
    $services = service::where('status',1)->get();

    $fecha =date('Y').'-'.date('m').'-01';
    $nuevafecha = strtotime ( '+0 month' , strtotime ( $fecha ) ) ;
    $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
    $month = date("m",strtotime($nuevafecha));
    $year = date("Y",strtotime($nuevafecha));
    $meesactual = $month;
    $dateObj   = DateTime::createFromFormat('!m', $month);
    $monthName = $dateObj->format('F');


    $mes=$this->getCanlendar($nuevafecha,$id,$month,$year);
        //dd($mes);

    if(sizeof($mes)>35)
    {
      $jf=6;
    }else
    {
      $jf=5;
    }
    if($request->has('m')) $month = $request->get('m'); else $month = date('m');
    if($request->has('y')) $year = $request->get('y'); else $year = date('Y');

        $doctorid = $doctor->id;
        $dateschedule = isset($request->date) ? $request->date : "";
    //dd($mes);

    return view('admin.find_doctor.edit', compact('doctor','services','year','month', "dateschedule", 'doctorid'))
    ->with(['meesactual'=>$meesactual,'monthName'=>$monthName,'year'=>$year,'mes'=>$mes,'jf'=>$jf,'iddoc'=>$id]);
    // ALTER TABLE `doctors` ADD `status` ENUM('0','1') NOT NULL DEFAULT '1' AFTER `clinic_hours`;
    // ALTER TABLE `doctors` ADD `type` VARCHAR(190) NULL AFTER `status`, ADD `image_alt_text` VARCHAR(190) NULL AFTER `type`, ADD `enable_link` ENUM('none','appointment') NULL AFTER `image_alt_text`;
  }

  public function changemes(Request $request)
  {
    $datec=$request->mesactual;
    $id=$request->id;

    $meesactual=date("m",strtotime($datec));
    $year = date("Y",strtotime($datec));
        $fecha =$year.'-'.$meesactual.'-01';


        if($request->accion=='next')
        {
          $nuevafecha = strtotime ( '+1 month' , strtotime ( $fecha ) ) ;
        }elseif ($request->accion=='before') {
          $nuevafecha = strtotime ( '-1 month' , strtotime ( $fecha ) ) ;
        }

    $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
    $month = date("m",strtotime($nuevafecha));
    $year = date("Y",strtotime($nuevafecha));
    $meesactual = $month;
    $dateObj   = DateTime::createFromFormat('!m', $month);
    $monthName = $dateObj->format('F');

    $mes=$this->getCanlendar($nuevafecha,$id,$month,$year);
        //dd($mes);

    if(sizeof($mes)>35)
    {
      $jf=6;
    }else
    {
      $jf=5;
    }

    return view('admin.find_doctor.calendar')->with([
      'meesactual' => $meesactual,
      'monthName'  => $monthName,
      'year'       => $year,
      'mes'        => $mes,
      'jf'         => $jf,
      'iddoc'      => $id
    ]);


  }

  public function footer_setup(){
    $getintouch = setting::where('key', 'getintouch')->get();
    $site_links = setting::where('key', 'site_link')->get ();
    $k_p_j = setting::where('key', 'k_p_j')->get();
    $newsletter = setting::where('key', 'newsletter')->get();
    $social_links = setting::where('key', 'social_links')->get();
    $copyright    = setting::where('key', 'copyright')->get();
    $privacypolicy = setting::where('key','privacypolicy')->get();
    $last_updated_data = DB::table('last_updated_data')->where('id','1')->get();

    return view('admin.find_doctor.footer_setup')->with(['footer_last_updated'=>$last_updated_data[0]->last_updated,'social_links'=>$social_links,'newsletter'=>$newsletter,'getintouch'=>$getintouch,'site_links'=>$site_links,'k_p_j'=>$k_p_j,'copyright'=>$copyright,'privacypolicy'=>$privacypolicy]);
  }

  public function add_footer_setup(Request $request){
    if($request->tab == "getintouch"){
      $status = 0;
      if($request->status){
        $status = 1;
      }
      $insert=DB::table('settings')->insert(
        [
            "key"=>$request->tab,
          "status"=>$status,
          "details"=>$request->icon,
          "description"=>$request->title
        ]
      );

      if($insert){
        return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
      }else{
        return redirect()->back()->with('message', 'Sorry something went wrong!!');
      }
    }

  }


  public function edit_footer_setup(Request $request){

    $key  = $request->key;
    $submit = $request->submit;
    // echo $key ;
    // echo $submit ;
    
    DB::table('last_updated_data')->where('id',1)->update(['last_updated'=>date('Y-m-d H:i:s')]);
    
    if($key == 'getintouch' && $submit == 'edit')
    {
      $status = $request->status ? '1' : 0;
      DB::table('settings')->where('id',$request->id)
      ->update(['description' => $request->description,'status'=>$status,'details'=>$request->details,'updated_at'=>date('Y-m-d H:i:s')]);
    return redirect()->back()->with('message', 'Successfully Updated');
    }
    elseif($key == 'site_link' && $submit == 'add')
    {
      $status = 0;
      if($request->status){
        $status = 1;
      }
      $insert=DB::table('settings')->insert(
        [
            "key"=>$request->key,
          "status"=>$status,
          "details"=>$request->details,
          "line1"=>$request->url
        ]
      );

      return redirect()->back()->with('message', 'Records added Successfully');
    }
    elseif($key == 'site_link' && $submit == 'edit')
    {
      $status = $request->status ? '1' : 0;
      DB::table('settings')->where('id',$request->id)
      ->update(['line1' => $request->url,'status'=>$status,'details'=>$request->details,'updated_at'=>date('Y-m-d H:i:s')]);
      return redirect()->back()->with('message', 'Successfully Updated');
    }
    elseif($key == 'k_p_j' && $submit == 'add')
    {
      $status = 0;
      if($request->status){
        $status = 1;
      }
      $insert=DB::table('settings')->insert(
        [
            "key"=>$request->key,
          "status"=>$status,
          "details"=>$request->details,
          "line1"=>$request->hospital_url
        ]
      );

      return redirect()->back()->with('message', 'Records added Successfully');
    }
    elseif($key == 'k_p_j' && $submit == 'edit')
    {
      $status = $request->status ? '1' : 0;
      DB::table('settings')->where('id',$request->id)
      ->update(['line1' => $request->hospital_url,'status'=>$status,'details'=>$request->details,'updated_at'=>date('Y-m-d H:i:s')]);
      return redirect()->back()->with('message', 'Successfully Updated');
    }
    elseif($key == 'newsletter' && $submit == 'edit')
    {
      $status = $request->status ? '1' : 0;
      DB::table('settings')->where('id',$request->id)
      ->update(['description' => $request->description,'status'=>$status,'details'=>$request->details,'updated_at'=>date('Y-m-d H:i:s')]);
      return redirect()->back()->with('message', 'Successfully Updated');
    }
    elseif($key == 'social_links' && $submit == 'add')
    {
      $status = 0;
      if($request->status){
        $status = 1;
      }
      $insert=DB::table('settings')->insert(
        [
            "key"=>$request->key,
          "status"=>$status,
          "details"=>$request->details,
          "description"=>$request->description,
          "line1"=>$request->social_url,
        ]
      );

      return redirect()->back()->with('message', 'Records added Successfully');
    }
    elseif($key == 'social_links' && $submit == 'edit')
    {
      $status = $request->status ? '1' : 0;
      DB::table('settings')->where('id',$request->id)
      ->update(['description' => $request->description,'status'=>$status,'details'=>$request->details,'line1'=>$request->social_url,'updated_at'=>date('Y-m-d H:i:s')]);
      return redirect()->back()->with('message', 'Successfully Updated');
    }
    elseif($key == 'copyright' && $submit == 'edit')
    {
      DB::table('settings')->where('id',$request->id)
      ->update(['details' => htmlspecialchars($request->detail),'updated_at'=>date('Y-m-d H:i:s')]);
      return redirect()->back()->with('message', 'Successfully Updated');
    }
    elseif($key == 'privacypolicy' && $submit == 'edit')
    {
      DB::table('settings')->where('id',$request->id)
      ->update(['details' => htmlspecialchars($request->detail),'updated_at'=>date('Y-m-d H:i:s')]);
      return redirect()->back()->with('message', 'Successfully Updated');
    }
    if($submit == 'delete'){
      DB::table('settings')->where('id', '=', $request->id)->delete();
      return redirect()->back()->with('message', 'Successfully Deleted!!');
    }
    if($submit == 'deleteid')
    {
      DB::table('settings')->whereIn('id', $request->ids)->delete();
      echo '1';
      exit;
      // return redirect()->back()->with('message', 'Successfully Deleted!!');  
    }


  }


  public function datesmodal(Request $request, $docId)
  {
    $date = $request->date;

    $doctor = doctor::with(['schedules' => function ($q) use ($date) {
      $q->where('date', $date);
    }])->findOrFail($docId);

    $patiens = Appointment::with('patient')
        ->where('status', 1)
        ->where('doctor_id','=', $docId)
        ->where('appointment_date','=', $request->date)
        ->get();

        $Namemon = date("m",strtotime($request->date));
    $yearmodal = date("Y",strtotime($request->date));
    $day = date("d",strtotime($request->date));
    $dateObj   = DateTime::createFromFormat('!m',$Namemon);
    $Namemon = $dateObj->format('F');

    return view('admin.find_doctor.modaldates')->with([
      'doctor'   => $doctor,
      'Namemon'  => $Namemon,
      'yearmodal'=> $yearmodal,
      'day'      => $day,
      'patients'  => $patiens,
    ]);


  }


  public function editschedulemodal(Request $request)
  {
    $date = $request->date;
    $docId = $request->docid;

    $doctor = doctor::with(['schedules' => function ($q) use ($date) {
      $q->where('date', $date);
    }])->findOrFail($docId);

    return view('admin.find_doctor.EditConsultant')->with([
      'doctor'       => $doctor,
      'doctorid'     => $docId,
      'dateschedule' => $date
    ]);
  }

  public function editPopup(Request $request)
    {
      $date = $request->input('date');
      $docId = explode('_',$request->input('id'))[2];
      //$date='2018-06-17';
      $doctor = doctor::with(['schedules' => function ($q) use ($date) {
        $q->where('date', $date);
      }])->findOrFail($docId);

      if (count($doctor->schedules) == 0) {
      $arrDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
      $arrMonths = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
      $current_year = date('Y');
      $range = range($current_year, $current_year+50);
      $arrYears = array_combine($range, $range);

      $currentDayName = date('l', strtotime($date));
      $currentMonthName = date('F', strtotime($date));
      $currentYearName = date('Y', strtotime($date));

      $scheduleData = schedule::where('doctor_id',$docId)->orderBy('id', 'asc')->get();
      if (!empty($scheduleData)) {
        foreach($scheduleData as $scheduleRow) {
            $scheduleBulkValues = (isset($scheduleRow->bulk_values))? $scheduleRow->bulk_values : '';
            $scheduleBulkValues = str_replace(',', ';', $scheduleBulkValues);
            $scheduleBulkValue = explode(';', $scheduleBulkValues);
        if(!empty($scheduleBulkValue)) {
            if ($scheduleRow->bulk_option == 0) {
                $selectedDays = $selectedMonth = [];
            foreach ($scheduleBulkValue as $scheduleBulk) {
                if (in_array($scheduleBulk, $arrDays)) {
                        $selectedDays[] = $scheduleBulk;
                }
                if (in_array($scheduleBulk, $arrMonths)) {
                    $selectedMonth[] = $scheduleBulk;
                } else if($scheduleBulk == 'Every Month') {
                    $selectedMonth = $arrMonths;
                }
            }
        if (in_array($currentDayName, $selectedDays) && in_array($currentMonthName, $selectedMonth)) {
                    $doctor = doctor::with(['schedules' => function ($q) use ($scheduleRow) {
                      $q->where('date', $scheduleRow->date);
                    }])->findOrFail($docId);
        }

    } else {
            $selectedDays = $selectedYears = [];
            foreach ($scheduleBulkValue as $scheduleBulk) {
                if (in_array($scheduleBulk, $arrDays)) {
                    $selectedDays[] = $scheduleBulk;
            }
            if (in_array($scheduleBulk, $arrYears)) {
                $selectedYears[] = $scheduleBulk;
             } else if($scheduleBulk == 'Every Year') {
                $selectedYears = $arrYears;
             }
            }
            if (in_array($currentDayName, $selectedDays) && in_array($currentYearName, $selectedYears)) {
                    $doctor = doctor::with(['schedules' => function ($q) use ($scheduleRow) {
                      $q->where('date', $scheduleRow->date);
                    }])->findOrFail($docId);
            }
          }
         }
        }
        }
      }
      //return response()->json(['view' => $date ]);
      $view = view('admin.find_doctor._edit_popup')->with([
        'doctor'       => $doctor,
        'doctorid'     => $docId,
        'dateschedule' => $date
      ])->render();
        
      return response()->json(['view' => $view]);
    }

  public function SaveSchedule(Request $request)
  {
    $doctor = doctor::findOrFail($request->doctor_id);
    $appointmentTimes = preg_split('/\n|\r\n?/', $doctor->clinic_hours)[0];
    $appointmentTimesFirst = strstr($appointmentTimes, ":", true);
    $appointmentTimes = strstr($appointmentTimes, ":");
    $appointmentTimes = explode(" / ", $appointmentTimes);
    
    return DB::transaction(function()
    use ($doctor, $appointmentTimes, $appointmentTimesFirst, $request) {
      //$doctor->schedules()->delete();
      
      $x = []; //appointment times which will be imploded
      foreach ($appointmentTimes as $index => $appointmentTime) {
        if($index > 0) {
          break;
        }
        $appointmentTime = str_replace(": ", "", $appointmentTime);
        
        $bulk_values_1 = 'bulkValues_1_'.$index;
        $bulk_values_2 = 'bulkValues_2_'.$index;
        $bulk_option = 'bulk_'.$index;

        $x[] = $request->appointment_times_start[$index].'-'.$request->appointment_times_end[$index];
        $schedule = $doctor->schedules()->where('date', $request->date)->first();

        $inputs = $request->all();
        
        // if(isset($request->$bulk_values_1) && isset($request->$bulk_values_2))
        if(isset($inputs[$bulk_values_1]) && isset($inputs[$bulk_values_2]))
        {
          $bulk_values = [
            // implode(",", $request->$bulk_values_1),
            // implode(",", $request->$bulk_values_2)
            implode(",", $inputs[$bulk_values_1]),
            implode(",", $inputs[$bulk_values_2])
          ];
          $data = [
            'status'       => $request->status[$index],
            'max_patients' => $request->max_patients[$index],
            'appointment_time' => $x[$index],
            'bulk_option'  => $inputs[$bulk_option],
            'bulk_values'  => implode(";", $bulk_values),
            'date'         => $request->date
          ];
        }
        else
        {
          $data = [
            'status'       => $request->status[$index],
            'max_patients' => $request->max_patients[$index],
            'appointment_time' => $x[$index],
            'bulk_option'  => '',
            'bulk_values'  => '',
            'date'         => $request->date
          ];
        }
        
        if($schedule !== null) {
          $schedule->update($data);
        } else {
          $doctor->schedules()->create($data);
        }
        
        $doctor->schedules()
             ->where('appointment_time', $appointmentTime)
             ->update(['appointment_time' => $x[$index]]);

        $doctor->appointments()
             ->where('appointment_time', $appointmentTime)
             ->update(['appointment_time' => $x[$index]]);
      }

      $appointmentTimesImplode = implode(" / ", $x);
      $clinic_hour = $appointmentTimesFirst.': '.$appointmentTimesImplode;

      $doctor->update([
        'clinic_hours' => $clinic_hour,
      ]);

      return redirect('admin/find_doctor/'.$request->doctor_id.'/edit')
         ->withMessage('Consultant schedule has been updated!');
    });

    return redirect('admin/find_doctor/'.$request->doctor_id.'/edit')
         ->withError('Something wents wrong!');
  }

  public function savedate ($start,$end,$idd,$status3,$q,$appointment,$mx)
  {
      $i=0;

    while ($i<80) {

       DB::table('schedule')
       ->where('appointment_time','=',$appointment)
       ->where('date','=',$start)
       ->delete();

       DB::table('schedule')->insert(
      ['doctor_id' =>$idd,'status' =>$status3,'date' =>$start,'appointment_time' =>$appointment,'max_patients' =>$mx]
        );

       $i++;

       if($start==$end){$i=82;}

       $start = strtotime ( '+ '.$q.' days' , strtotime ( $start ) ) ;
       $start = date ( 'Y-m-d' , $start );

    }
  }

  public function bymonth($bymonth1,$daybymonth1,$idd,$status3,$appointment,$mx)
  {

      foreach ($bymonth1 as $key => $value) {

              foreach ($daybymonth1 as $k => $val) {
               $dateconver=$bymonth1[$key].' 01 '.date('Y');
               $dateconver=date('Y-m-d', strtotime($dateconver));
               $test = new DateTime($dateconver);
                 $start=$test->modify('first '.$daybymonth1[$k])->format('Y-m-d');
                 //$end= $test->modify('last '.$daybymonth1[$k])->format('Y-m-d');
                 $end=date('Y-m-d', strtotime('last '.$daybymonth1[$k].' of '.$bymonth1[$key].' '.date('Y')));


                $this->savedate($start,$end,$idd,$status3,7,$appointment,$mx);
              }
            }

  }

  public function byyear($byyear1,$daybyyear1,$idd,$status3,$appointment,$mx)
  {

    foreach ($byyear1 as $key => $value) {

                  foreach ($daybyyear1 as $k => $val) {
                   $dateconver='january 01 '.$byyear1[$key];
                   $dateconver=date('Y-m-d', strtotime($dateconver));
                   $test = new DateTime($dateconver);
                       $start=$test->modify('first '.$daybyyear1[$k])->format('Y-m-d');
                       //$end= $test->modify('last '.$daybymonth1[$k])->format('Y-m-d');
                       $end=date('Y-m-d', strtotime('last '.$daybyyear1[$k].' of december '.$byyear1[$key]));


                    $this->savedate($start,$end,$idd,$status3,7,null,null);
                  }
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

  public function getCanlendar($nuevafecha,$id,$month,$ano)
  {
          //Convert the date string into a unix timestamp
    $unixTimestamp = strtotime($nuevafecha);

    //Get the day of the week using PHP's date function.
    $dayOfWeek = date("w", $unixTimestamp);

    $a_date = $nuevafecha;
    $last= date("t", strtotime($a_date));

    $i=2;
    $k=$dayOfWeek+1;
    $mes=array();
        $date=$ano.'-'.$month.'-'.'01';

    $patiens=DB::table('appointments')
    ->leftJoin('patients','appointments.patient_id','=','patients.id')
    ->where('doctor_id','=',$id)
    ->where('appointment_date','=',$date);

    $statusdoc=DB::table('schedule')
    ->select('status')
    ->where('doctor_id','=',$id)
    ->where('date','=',$date)
    ->first();

    if($statusdoc)
    {
      $stat=$statusdoc->status;
    }else
    {
      $stat='';
    }


    $book=$patiens->count();

    $mes[$dayOfWeek]=[
      'dia'=> 1,
      'book'=>$book,
      'statusdoc'=>$stat
    ];


    for ($h=1; $h<$dayOfWeek+1 ; $h++) {
      $mes[$dayOfWeek-$h]=[
      'dia'=> '',
      'book'=>'',
      'statusdoc'=>''
        ];
    }

    while (1) {

            $n = sprintf("%02d", $i);
            $date=$ano.'-'.$month.'-'.$n;
      $patiens=DB::table('appointments')
        ->join('patients','appointments.patient_id','=','patients.id')
        ->where('doctor_id','=',$id)
        ->where('appointment_date','=',$date);

        $statusdoc=DB::table('schedule')
        ->select('status')
        ->where('doctor_id','=',$id)
        ->where('date','=',$date)
        ->first();

      if($statusdoc)
        {
          $stat=$statusdoc->status;
        }else
        {
          $stat='';
        }


      $book=$patiens->count('patient_id');


      $mes[$k]=[
      'dia'=> $i,
      'book'=>$book,
      'statusdoc'=>$stat
        ];

        if($i==$last)
        {
          break;
        }

        $k++;$i++;
    }

        return $mes;
  }


  public function postFindDoctorEdit(Request $request, $id)
  {
    // return $request->all();
    $this->validate($request,[
          'profile_status' => 'sometimes',
      'profile_consultant_name' => 'required',
      'profile_service' => 'required|exists:services,id',
      'profile_degrees' => 'required',
      'profile_experience' => 'required',
      'profile_consultant_image' => 'sometimes|image|mimes:jpeg,png|min:1|max:500',
      'profile_details' => 'required',
      'profile_clinic_hours' => 'required',
      'profile_consultant_type' => 'required',
      'profile_consultant_image_alt_text' => 'sometimes',
      'profile_enable_link' => 'required'
    ],[
      'profile_status.sometimes' => 'The Status field is required.',
      'profile_consultant_name.required' => 'The Consultant Name field is required.',
      'profile_service.required' => 'The Specialty field is required.',
      'profile_service.exists' => 'The Specialty already exists.',
      'profile_degrees.required' => 'The Degrees field is required.',
      'profile_experience.required' => 'The Experince field is required.',
      'profile_consultant_image.required' => 'The Consultant Image field is required.',
      'profile_consultant_image.image' => 'The Consultant Image must be an image.',
      'profile_details.required' => 'The Details is required.',
      'profile_clinic_hours.required' => 'The Clinic Hours is required.',
      'profile_consultant_type.required' => 'The Consultant Type is required.',
      'profile_consultant_image_alt_text.required' => 'The Consultant Image Alt Text is required.',
      'profile_enable_link.required' => 'The Enable Link is required.',
      ]
    );

    $doctor = doctor::find($id);

    // if user choose a file, replace the old one //
    if( $request->hasFile('profile_consultant_image') ){
      $file = $request->file('profile_consultant_image');
      $destination_path = 'images/find_doctor/';
      $filename = str_random(6).'_'.$file->getClientOriginalName();
      $file->move(public_path() .'/'. $destination_path, $filename);
      $doctor->image = $destination_path . $filename;
    }
      // return public_path() .'/'. $destination_path.$filename;

    // replace old data with new data from the submitted form //
    $doctor->status = ($request->has('profile_status') && $request->profile_status == 'on'?1:0);
    $doctor->name = $request->profile_consultant_name;
    $doctor->service_id = $request->profile_service;
    $doctor->degrees = $request->profile_degrees;
    $doctor->experience = $request->profile_experience;
    $doctor->details = $request->profile_details;
    $doctor->clinic_hours = $request->profile_clinic_hours;
    $doctor->type = $request->profile_consultant_type;
    if($request->has('profile_consultant_image_alt_text')){
      $doctor->image_alt_text = $request->profile_consultant_image_alt_text;
    }
    $doctor->enable_link = $request->profile_enable_link;
    $doctor->save();

    return redirect('/admin/find_doctor_list')->with('message', 'The information has been saved/updated successfully.');
  }

  public function getPatientsList()
  {
    $countries = Country::where('status', 1)->get();
    $patients = Patient::with(["user"])->get();
    //var_dump($patients[0]->user->email);
    return view('admin.find_doctor.patients_list', compact(['countries','patients']));
  }

  public function postAddNewPatientAddNew(Request $request)
  {
    $this->validate($request,[
      'patient_status' => 'required',
      'patient_mrn_number' => 'required',
      'patient_last_name' => 'required',
      'patient_first_name' => 'required',
      'patient_date_of_birth' => 'required',
      'patient_gender' => 'required',
      'patient_passport_number' => 'required',
      'patient_contact_number' => 'required',
      'patient_address' => 'required',
      'patient_city' => 'required',
      'patient_postal_code' => 'required',
      'patient_state' => 'required',
      'patient_country_id' => 'required|exists:countries,id',
      'patient_email' => 'required|unique:users,email',
      'password' => 'required|confirmed',
      'patient_newsletter_subscription' => 'sometimes'
    ]);

    $user = new User;
    $user->name = $request->patient_first_name .' '. $request->patient_last_name;
    $user->email = $request->patient_email;
    $user->password = bcrypt($request->password);
    $user->save();

    $patient = new Patient;
    $patient->user_id = $user->id;
    $patient->status = $request->patient_status;
    $patient->mrn_number = $request->patient_mrn_number;
    $patient->last_name = $request->patient_last_name;
    $patient->first_name = $request->patient_first_name;
    $patient->date_of_birth = $request->patient_date_of_birth;
    $patient->gender = $request->patient_gender;
    $patient->passport_number = $request->patient_passport_number;
    $patient->contact_number = $request->patient_contact_number;
    $patient->address = $request->patient_address;
    $patient->city = $request->patient_city;
    $patient->postal_code = $request->patient_postal_code;
    $patient->state = $request->patient_state;
    $patient->country_id = $request->patient_country_id;
    $patient->newsletter_subscription = $request->patient_newsletter_subscription;
    $patient->save();

    return [
      'status' => 'ok',
      'message' => 'The information has been saved/updated successfully.'
    ];
  }

  public function postPatientSaveEdit(Request $request)
  {
        $patient = Patient::find($request->patient_id);

        $this->validate($request,[
      'patient_status' => 'required',
      'patient_mrn_number' => 'required|unique:patients,mrn_number,'.$patient->id,
      'patient_last_name' => 'required',
      'patient_first_name' => 'required',
      'patient_date_of_birth' => 'required',
      'patient_gender' => 'required',
      'patient_passport_number' => 'required',
      'patient_contact_number' => 'required',
      'patient_address' => 'required',
      'patient_city' => 'required',
      'patient_postal_code' => 'required',
      'patient_state' => 'required',
      'patient_country_id' => 'required|exists:countries,id',
      'patient_newsletter_subscription' => 'required',
      // 'patient_email' => 'required|email|unique:users,email',
      // 'password' => 'required|confirmed',
      'patient_id' => 'required|exists:patients,id'
    ]);

    $patient->status = $request->patient_status;
    $patient->mrn_number = $request->patient_mrn_number;
    $patient->last_name = $request->patient_last_name;
    $patient->first_name = $request->patient_first_name;
    $patient->date_of_birth = $request->patient_date_of_birth;
    $patient->gender = $request->patient_gender;
    $patient->passport_number = $request->patient_passport_number;
    $patient->contact_number = $request->patient_contact_number;
    $patient->address = $request->patient_address;
    $patient->city = $request->patient_city;
    $patient->postal_code = $request->patient_postal_code;
    $patient->state = $request->patient_state;
    $patient->country_id = $request->patient_country_id;
    $patient->newsletter_subscription = $request->patient_newsletter_subscription;
    $patient->save();

    $user = User::find($patient->user_id);
    $user->name = $request->patient_first_name .' '. $request->patient_last_name;
    // $user->email = $request->patient_email;
    if($request->password != ''){
      $user->password = bcrypt($request->password);
    }
    $user->save();

    return [
      'status' => 'ok',
      'message' => 'The information has been saved/updated successfully.'
    ];
  }

  public function getAppointmentsList(Request $request)
  {
    $appointments = \App\Appointment::with(['patient', 'doctor'])->has('patient')->has('doctor')->get();
    foreach ($appointments as $value) {
      // echo $value->patient->user_id.'<br>';  
      $temp = [];
      $temp = $value;

      /*$users = \App\User::select('email')->where('id',$value->patient->user_id)->first();
      $temp['users'] = $users;
      $countries = \App\Country::select('name')->where('id',$value->patient->country_id)->first();
      $temp['countries'] = $countries;*/
      // echo json_encode($users);
      // exit;
    }
    
    $services = service::where('status',1)->get();
    $doctors = doctor::all();

    /*echo json_encode($appointments);
    exit;*/
    if($request->has('m')) $month = $request->get('m'); else $month = date('m');
    if($request->has('y')) $year = $request->get('y'); else $year = date('Y');

    // return view('front.appointment.step-one', compact('consultant','month','year'));


    return view('admin.find_doctor.appointments_list', compact(['appointments','services','doctors','month','year']));
  }

  public function getPatientDelete($id)
  {
    $patient = Patient::find($id);
    $patient->delete();

    return [
      'status' => 'ok',
      'message' => 'The information has been saved/updated successfully.'
    ];
  }

  public function getDeleteDoctorImage($id)
  {
    $doctor = doctor::find($id);
    $doctor->image = null;
    $doctor->save();

    return [
      'status' => 'ok',
      'message' => 'The information has been saved/updated successfully.'
    ];
  }

  public function DeleteSelectedKPJHospitalList(Request $request)
  {
    $ids = $request->ids;
      // $patients = VisitorList::whereIn('id',explode(",",$ids))->get();
      $hospitals = setting::whereIn('id', explode(",",$ids))->get();
      foreach ($hospitals as $hospital) {
          $hospital->delete();
      }
      return response()->json(['success'=>"KPJ Hospital have been deleted successfully."]);    
  }
  //wolf0518
  public function DeleteSelectedlinkList(Request $request)
  {
    $ids = $request->ids;
      // $patients = VisitorList::whereIn('id',explode(",",$ids))->get();
      $links = setting::whereIn('id', explode(",",$ids))->get();
      foreach ($links as $link) {
          $link->delete();
      }
      return response()->json(['success'=>"Site links have been deleted successfully."]);    
  }
  public function DeleteAllKPJHospitalList(){
    $visitors = setting::where('key','k_p_j')->delete();
        return redirect('/admin/footer_setup')
               ->with('message','All KPJ Hospital lists have been deleted successfully.');
  }
}
