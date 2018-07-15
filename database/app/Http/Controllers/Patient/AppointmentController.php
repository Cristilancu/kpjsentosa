<?php
namespace App\Http\Controllers\Patient;

use App\Appointment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;


class AppointmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('patient');
    }

    public function index(){
        $appointments = Auth::user()->patient->appointments()->orderBy('appointment_date', 'desc')->get();
		
        return view("front.patient.appointment", compact("appointments"));
    }

    public function cancel($id, Appointment $appointmentModel)
    {

        $appointment = $appointmentModel->find($id);
        $appointment->status = 0;
        $appointment->update();
        \Session::flash("message", "the appointment canceled successfully");

        return redirect('/patient/appointment');
    }

    public function active($id, Appointment $appointmentModel)
    {

        $appointment = $appointmentModel->find($id);
        $appointment->status = 1;
        $appointment->update();
        \Session::flash("message", "the appointment booked successfully");

        return redirect('/patient/appointment');
    }

    public function changeDate($id, Appointment $appointmentModel, Request $request)
    {

        $appointment = $appointmentModel->find($id);
        $consultant = $appointment->doctor;
        if($request->has('m')) $month = $request->get('m'); else $month = date('m');
        if($request->has('y')) $year = $request->get('y'); else $year = date('Y');

        return view('front.patient.step-one', compact('consultant','month','year', 'appointment'));
    }

    public function postChangeDate(Appointment $appointmentModel, Request $request)
    {

        $appointment = $appointmentModel->find($request->appointment_id);
        $appointment->doctor_id = $request->doctor_id;
        $appointment->appointment_day = date("l", strtotime($request->appointment_date));
        $appointment->appointment_date = $request->appointment_date;
        $appointment->appointment_time = $request->schedule_id;
        $appointment->status = 2 ;
        $appointment->update();
        \Session::flash("message", "the appointment updated successfully");

        return redirect('/patient/appointment');
    }
}