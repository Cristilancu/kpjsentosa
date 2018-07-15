<?php
namespace App\Http\Controllers\Patient;

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
        $appointments = Auth::user()->patient->appointments()->where('status',1)->orderBy('appointment_date', 'desc')->get();
		
        return view("front.patient.appointment", compact("appointments"));
    }
    
    
}
