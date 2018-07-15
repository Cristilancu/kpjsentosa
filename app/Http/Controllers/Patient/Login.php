<?php namespace App\Http\Controllers\Patient;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Login extends Controller
{

    public function index(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (is_null($user)) {
            return [
                'status' => 0,
                'message' => 'Invalid user',
                'alert' => '<div class="alert alert-danger" style="width: 94%"><i class="fa fa-times-circle"></i> Invalid user.</div>'
            ];
        }
        if (!$user->confirmed) {
            return [
                'status' => 0,
                'message' => 'User not confirmed',
                'alert' => '<div class="alert alert-danger" style="width: 94%"><i class="fa fa-times-circle"></i> This account is not yet confirmed.</div>'
            ];
        }
        if (\Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return [
                'status' => 1,
                'message' => 'You have successfuly logged in',
                'alert' => '<div class="alert alert-success" style="width: 94%"><i class="fa fa-check-circle"></i> Password entered correctly.</div>'
            ];
        } else {
            return [
                'status' => 0,
                'message' => 'Wrong password',
                'alert' => '<div class="alert alert-danger" style="width: 94%"><i class="fa fa-times-circle"></i> Password entered wrongly.</div>'
            ];
        }
    }

    public function logout(Request $request)
    {
        \Auth::logout();
        return redirect()->to('/patient/login')->withMessage('You have logged out');
    }

    public function loginForm()
    {
        if (\Auth::check()) {
            return redirect()->to('/patient/dashboard');
        } else {
            $countries = \App\Country::where('status', 1)->orderBy('name','asc')->get();
            return view('front.patient.login', compact('countries'));
        }
    }

    public function registration()
    {
        if (\Auth::check()) {
            return redirect()->to('/patient/dashboard');
        } else {
            $countries = \App\Country::where('status', 1)->get();
            return view('front.patient.registration', compact('countries'));
        }
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'mrn_number' => 'sometimes',
            'last_name' => 'required',
            'first_name' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'passport_number' => 'required',
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
        $confirmation_code = str_random(30);
        $user->confirmation_code = $confirmation_code;
        $user->save();

        $patient = new \App\Patient;
        $patient->user_id = $user->id;
        $patient->mrn_number = $request->mrn_number;
        $patient->last_name = $request->last_name;
        $patient->first_name = $request->first_name;
        $patient->date_of_birth = $request->date_of_birth;
        $patient->gender = $request->gender;
        $patient->passport_number = $request->passport_number;
        $patient->contact_number = $request->contact_number;
        $patient->address = $request->address;
        $patient->city = $request->city;
        $patient->postal_code = $request->postal_code;
        $patient->state = $request->state;
        $patient->country_id = $request->country_id;
        $patient->newsletter_subscription = $request->newsletter;
        $patient->status = 1;
        $patient->save();

        $view_data['email'] = $user->email;
        $view_data['name'] = $patient->first_name . "  " . $patient->last_name;
        $view_data['link'] = url("/patient/activate_account/$confirmation_code");

        $to_email_id = $user->email;
        $subject = 'Verify your email address';
        Mail::send(['html' => 'emails.email_verification'], ['view_data' => $view_data],
            function ($message) use ($to_email_id, $subject) {
                $message->to($to_email_id)->subject($subject);
            });

        return View('front.patient.email_verified', compact('view_data'));
    }

    public function actionActivateAccount($confirmation_code)
    {
        if (!$confirmation_code) {
            return \Redirect::route('patient_login')->with('message', 'Confirmation code is needed.');
        }

        $user = User::whereConfirmationCode($confirmation_code)->first();

        if (!$user) {
            return \Redirect::route('patient_login')->with('message', 'Confirmation code not valid or email already confirmed');
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        return \Redirect::route('patient_login')->with('message',
            'Your account has been activated. You are now able to log in and check your appointment online.');
    }

    public function passwordReset()
    {
        $user = User::whereEmail(\Input::get('email'))->first();

        if (!$user) {
            return \Redirect::route('patient_login')->with('message', 'User not found in out system');
        }
        if ($user->confirmed) {
            $newpass = str_random(8);

            $user->password = bcrypt($newpass);
            $user->save();

            $view_data['email'] = $user->email;
            $view_data['name'] = $user->patient->first_name . "  " . $user->patient->last_name;
            $view_data['new_password'] = $newpass;
            $view_data['link'] = url("/patient/activate_account/$user->confirmation_code");

            $to_email_id = $user->email;
            $subject = 'Your password has been changed';
            Mail::send(['html' => 'emails.password_reset'], ['view_data' => $view_data],
                function ($message) use ($to_email_id, $subject) {
                    $message->to($to_email_id)->subject($subject);
                });

            return \Redirect::route('patient_login')->with('message',
                'A new password was sent to your email.');

        }

        // resend confirmation email
        $view_data['email'] = $user->email;
        $view_data['name'] = $user->patient->first_name . "  " . $user->patient->last_name;
        $view_data['link'] = url("/patient/activate_account/$user->confirmation_code");

        $to_email_id = $user->email;
        $subject = 'Verify your email address';
        Mail::send(['html' => 'emails.email_verification'], ['view_data' => $view_data],
            function ($message) use ($to_email_id, $subject) {
                $message->to($to_email_id)->subject($subject);
            });

        return \Redirect::route('patient_login')->with('message',
            'An account confirmation email was sent to your email address.');
    }

    public function resendConfirmation($email)
    {
        $user = User::where('email', $email)->first();
        $view_data['email'] = $user->email;
        $view_data['name'] = $user->patient->first_name . "  " . $user->patient->last_name;
        $view_data['link'] = url("/patient/activate_account/$user->confirmation_code");
        $view_data['show_email_warning'] = true;

        $to_email_id = $user->email;
        $subject = 'Verify your email address';
        Mail::send(['html' => 'emails.email_verification'], ['view_data' => $view_data],
            function ($message) use ($to_email_id, $subject) {
                $message->to($to_email_id)->subject($subject);
            });

        return View('front.patient.email_verified', compact('view_data'));

    }
}
