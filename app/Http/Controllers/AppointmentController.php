<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\doctor;
use App\Appointment;
use App\Patient;
use Illuminate\Http\Request;

class AppointmentController extends Controller {

	public function getStepOne(Request $request, $doctor_id = 0)
	{
		if($doctor_id > 0) {
			$consultant = doctor::find($doctor_id);
		} else {
			return redirect()->to('/find_doctor')->withMessage('You must select a doctor first');
		}
		
		if($request->has('m')) $month = $request->get('m'); else $month = date('m');
		if($request->has('y')) $year = $request->get('y'); else $year = date('Y');
		return view('front.appointment.step-one', compact('consultant','month','year'));
	}

	public function postNext(Request $request)
	{
		$this->validate($request,[
			'doctor_id' => 'required|exists:doctors,id',
			'appointment_date' => 'required',
			'schedule_id' => 'required'
		]);



		$appointment = new Appointment;
		$appointment->doctor_id = $request->doctor_id;
		$appointment->appointment_day = date("l", strtotime($request->appointment_date));
		$appointment->appointment_date = $request->appointment_date;
		$appointment->appointment_time = $request->schedule_id;
		$appointment->status = 1;
		$appointment->save();
		
		return redirect()->to('/make-appointment/'.$appointment->id.'/step-two');
	}

	public function getStepTwo($appointment_id)
	{
		$appointment = Appointment::find($appointment_id);
		$countries = \App\Country::where('status',1)->orderBy('name','asc')->get();

		if(\Auth::check() && \Auth::user()->patient){
			$patient = \Auth::user()->patient;
			return view('front.appointment.step-two', compact('appointment','patient', 'countries'));
		}else{
			if(\Auth::check()){
				$patient = \Auth::user();
			}
			else{
				$patient = null;
			}
			return view('front.appointment.step-two-guest', compact('appointment','patient','countries'));
			// $countries = \App\Country::where('status',1)->get();
			// return view('front.appointment.step-two-guest', compact('appointment','countries'));
		}
	}
	
	public function getConfirmation($appointment_id)
	{
		$appointment = Appointment::find($appointment_id);
        if($appointment == null) {
            return redirect()->back();
        }
		return view('front.appointment.confirmation', compact('appointment'));
	}

    public function updateAppointment($appointment_id, Request $request)
    {
        $data = $request->all();
        $appointment = Appointment::find($appointment_id);
        $appointment->update($data);

        $doc = doctor::where("service_id", $appointment->doctor->service_id)->first();
        $doc->update(["service_id" => $data["service_id"]]);

        $patient = Patient::where("mrn_number", $appointment->patient->mrn_number)->first();
        $patient->update(["mrn_number" => $data["mrn_number"]]);

        return redirect()->back()->with('message', 'Appointment has been updated Successfully');
    }

	public function postBook(Request $request)
	{
		if(\Auth::check()){

			$this->validate($request,[
				'appointment_id' => 'required|exists:appointments,id',
				'patient_id' => 'required|exists:patients,id'
			]);

			$appointment = Appointment::find($request->appointment_id);
			$appointment->patient_id = $request->patient_id;
			$appointment->save();

		} else {

			$this->validate($request,[
				'appointment_id' => 'required|exists:appointments,id',
				'mrn_number' => 'sometimes',
				'last_name' => 'required',
				'first_name' => 'required',
				'date_of_birth' => 'required',
				'gender' => 'required',
				'passsport_number' => 'required',
				'contact_number' => 'required',
				'email' => 'required|email|unique:users',
				'password' => 'required|confirmed',
				'address' => 'required',
				'postal_code' => 'required',
				'city' => 'required',
				'state' => 'required',
				'country_id' => 'required|exists:countries,id',
				'newsletter' => 'required',
				'agree' => 'required'
			]);

			$user = new \App\User;
			$user->name = sprintf("%s %s", $request->first_name, $request->last_name);
			$user->email = $request->email;
			$user->password = bcrypt($request->password);
			$user->save();

			$patient = new \App\Patient;
			$patient->user_id = $user->id;
			$patient->mrn_number = $request->mrn_number;
			$patient->last_name = $request->last_name;
			$patient->first_name = $request->first_name;
			$patient->date_of_birth = $request->date_of_birth;
			$patient->gender = $request->gender;
			$patient->passport_number = $request->passsport_number;
			$patient->contact_number = $request->contact_number;
			$patient->address = $request->address;
			$patient->city = $request->city;
			$patient->postal_code = $request->postal_code;
			$patient->state = $request->state;
			$patient->country_id = $request->country_id;
			$patient->newsletter_subscription = $request->newsletter;
			$patient->status = 1;
			$patient->save();

			$appointment = Appointment::find($request->appointment_id);
			$appointment->patient_id = $patient->id;
			$appointment->save();

		}

		return redirect()->to('/appointment-confirmation/'.$appointment->id)->withMessage("");
	}
}
