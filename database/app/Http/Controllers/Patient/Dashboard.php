<?php
namespace App\Http\Controllers\Patient;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller {

	public function __construct()
    {
        $this->middleware('patient');
    }

	public function index()
	{

//dd(Auth::user());
 $userid=Auth::user()->id;
 //$appointments= DB::table('patients')->join('appointments', 'appointments.patient_id', '=', 'patients.id')->where('patients.user_id',$userid)->where('appointments.status','1')->orderBy('appointments.appointment_date', 'desc')->limit(5)->get();
		$appointments = Auth::user()->patient->appointments()->orderBy('appointment_date', 'desc')->limit(5)->get();

//dd($appointments);
		return view('front.patient.dashboard', compact("appointments"));
	}



	public function getAppointmentDetails($id)
	{
		$appointment = \App\Appointment::find($id);
		return view('front.patient.appointment-details', compact('appointment'));
	}

}
