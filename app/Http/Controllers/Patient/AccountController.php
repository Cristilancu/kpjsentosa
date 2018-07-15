<?php
namespace App\Http\Controllers\Patient;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Country;

class AccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('patient');
    }

    public function index(){
        // $appointments = Auth::user()->patient->appointments()->where('status',1)->orderBy('appointment_date', 'desc')->get();
        $account_detail = Auth::user();

        // dd($account_detail);
        $countries = Country::where('status', 1)->get();

        return view("front.patient.account", compact(["account_detail", "countries"]));
    }

    public function update(Request $request){

        $account = Auth::user();
        $patient = $account->patient;
        $patient->mrn_number = $request->mrn_number;
        $patient->last_name = $request->last_name;
        $patient->first_name = $request->first_name;
        $patient->date_of_birth = $request->date_of_birth;
        $patient->gender = $request->gender;
        $patient->passport_number = $request->passport_number;
        $patient->contact_number = $request->contact_number;
        $patient->address = $request->address;
        $patient->postal_code = $request->postal_code;
        $patient->city = $request->city;
        $patient->state = $request->state;
        $patient->country_id = $request->country_id;
        $account->email = $request->email;
        
        $account->patient()->save($patient);
        $account->save();
        
        
        
        return redirect()->back()->with("message", "Success update your account.");
    }

    public function resetPassword(Request $request){
        $user = Auth::user();
        // dd(bcrypt($request->old_password));
        if(!Hash::check($request->old_password, $user->password)){
            return redirect()->back()->with("message", "Incorrect password.");
        }
        
        if($request->new_password != $request->confirm_password){
            return redirect()->back()->with("message", "Password does not match");
        }

        $user->password = bcrypt($request->new_password);
        $user->save();

        return redirect()->back()->with("message", "Success change password. Use new password at next login.");
        
    }
    
    
}
