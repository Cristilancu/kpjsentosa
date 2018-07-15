<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Mail;

class LoginController extends Controller
{
    //

    public function login(){
    	return view('front.login');
    }

    public function forgot_password(){
    	return view('front.forgot_password');

    }
    public function reset_password(request $request){ 
        $user = User::where(['email'=>$request->email])->first();
        $to_email_id = $email =  $request->email;
        $subject = 'Password Reset';
        $new_password = str_random(123);
        $view_data['link'] = url("/reset_password/$new_password");

        if(!$user){
             return redirect()->back()->with('error', 'False combination of username/password');
        }
        else{

        $user->formated_time = $new_password;
        $user->save();
            
             Mail::send(['html' => 'emails.password'], ['view_data'=>$view_data], function($message) use ($to_email_id,$subject)
            {
                $message->to($to_email_id)->subject($subject);    
            }); 

        }
       
    	return view('front.reset_password', compact('email'));
    } 

    public function signin(Request $request){

        // $user = new user;
        // $user->email = $request->username;
        // $user->name = $request->username;
        // $user->password = bcrypt($request->password);

        //$user->save();
        if(Auth::attempt(['email'=>$request->username,'password'=>$request->password]) || Auth::attempt(['name'=>$request->username,'password'=>$request->password])){


            $user = user::where('email', $request->username)->pluck('is_admin');
            if($user == 1)
                return redirect()->intended('/admin/dashboard');
            else
                return redirect()->back()->with('error', 'For administrator access only');
        }

        else{
            return redirect()->back()->with('error', 'False combination of username/password');
        }
    }

    public function reset_link($link){
        $user = user::where('formated_time', $link)->first();
        if(!$user) return redirect()->to('/forgot_password')->with('error', 'Confirmation link is not valid or has expired!');
        
        return view('front.reset_link', compact('user'));
    }

    public function reset_link_password(Request $request){
        if($request->password!=$request->cpassword){
            return redirect()->back()->with('error', 'Password does not match!');
        }
        else {
             $link = $request->link;
             $user = user::where('formated_time', $link)->first();
              if(!$user) return redirect()->to('/forgot_password')->with('error', 'Confirmation link is not valid or has expired!');

             $user->password = bcrypt($request->password);
             $user->formated_time=date('y-m-d-h-i-s');             
             $user->save();
            return redirect()->to('/login');
        }
    }
}
