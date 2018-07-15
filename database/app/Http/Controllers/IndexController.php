<?php

namespace App\Http\Controllers;

use App\RoomRate;
use Illuminate\Http\Request;
use App\Http\Requests\ApplicationRequest;
use App\career;
use App\news;
use App\newsletter;
use App\application;
use App\feedback;
use App\health_calender;
use App\service;
use App\doctor;
use App\event;
use App\kpj;
use App\kpj_category;
use Auth;
use App\PatientList;
use App\VisitorList;
use App\AdmissionDeposit;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    //

    public function index(){
        $events = event::orderBy('formated_time', 'desc')->where('status','1')->paginate(12);
        //return $events;
    	return view('front.index', compact('events'));
    }

    public function about_us(){
    	return view('front.about');
    }

    public function faq(){
    	return view('front.faq');
    }

    public function careers(){
    	$careers = career::where('status','1')->get();
    	return view('front.careers', compact('careers'));
    }

    public function show_article($id){
        $kpj = kpj::where('status', true)->find($id);

        return view('front.article', compact('kpj'));
    }
    public function articles_per_doctor()
    {
//        $kpj = kpj::get();
//        return $kpj;
        return view('front.articles_by_doctors');
    }

    public function articlesDetails(){
        return view('front.articles_by_doctors_detail');
    }
    public function job_application($id){
        $career = career::whereId($id)->first();
        return view('front.application', compact('career'));
    }

    public function latest_news(){
    	$news = news::orderBy('formated_time', 'desc')->where('status','1')->paginate(12);
    	return view('front.latest_news', compact('news'));
    }

    public function latest_events(){
        $events= event::orderBy('formated_time', 'desc')->where('status','1')->paginate(12);
    	return view('front.latest_events', compact('events'));
    }

    public function show_news($id){
        $news = news::whereId($id)->first();

        return view('front.show_news', compact('news'));
    }


    public function doctor_profile($id){
        $doctors = doctor::where('service_id', $id)->get();
        return view('front.doctor_profile', compact( 'doctors'));
    }

    public function subscribe(Request $request){
        $newsletter = new newsletter;
        $newsletter->name = $request->name;
        $newsletter->email = $request->email;
        $newsletter->status = '1';
        $newsletter->save();

        return redirect()->back()->with('message', 'Thanks for subscribing to KpjSentosa Newsletter');
    }

    public function save_application(ApplicationRequest $request){

        $app = new application;

        $app->first_name = $request->first_name;
        $app->last_name = $request->last_name;
        $app->gender = $request->gender;
        $app->email = $request->emai;
        $app->phone = $request->phone;
        $app->address = $request->address;
        $app->age = $request->age;
        $app->career_id = $request->career_id;

        if($request->hasFile('cv')){
            $filename = 'cv-'.date('y-m-d-h-i-s').'.'.$request->file('cv')->getClientOriginalExtension();
            $request->file('cv')->move(public_path().'/uploads', $filename);
            $app->cv = asset('/uploads/'.$filename);
            $app->formated_time = $request->file('cv')->getClientOriginalName();
        }

        $app->save();
        return redirect()->back()->with('message', 'Successful');
    }


    public function services(){

        return view('front.services', compact('services'));
    }

    public function show_service($id){
        $service = service::whereId($id)->first();
        $helpful_info = [];


        foreach ($service->helpful_infos as $key=>$ser) {
            if ($ser->status == 1) {
                $helpful_info[$key]['id'] = $ser->id;
                $helpful_info [$key] ['details'] = htmlspecialchars_decode ( $ser->details);
                $helpful_info[$key]['status'] = $ser->status;
                $helpful_info[$key] ['title'] = $ser->title;
            }
        }

        return view('front.service_show', compact('service', 'helpful_info'));
    }


    public function privacy(){
        return view('front.privacy');
    }

    public function terms(){
        return view('front.terms');
    }

    public function contact_us(){
        return view('front.contact_us');
    }

    public function post_feedback(Request $request){

        if(!$request->{'g-recaptcha-response'} || $request->{'g-recaptcha-response'}=='' ) return  redirect()->to('/contact_us#contacti')->with('error', 'Please validate recaptcha')->withInput();


        $feedback = new feedback;
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->phone = $request->phone;
        $feedback->category = $request->category;
        $feedback->subject = $request->subject;
        $feedback->message = $request->message;
        $feedback->status = '1';
        $feedback->save();

        return  redirect()->to('/contact_us#contacti')->with('message', 'Successful');
    }


    public function screening_packages(){
        return view('front.screening_packages');
    }

    public function promotion_packages(){
        return view('front.promotion_packages');
    }



    public function screening_packages_details($id=null){
        return view('front.screening_packages_details', compact('id'));
    }

    public function promotion_packages_details($id=null){
        return view('front.promotion_packages_details', compact('id'));
    }


    public function gp_partners(){
        return view('front.gp_partners');
    }

    public function find_doctor(){
        $services = \App\service::select('id','slug','title')
                                ->where('status',1)
                                ->whereHas('doctors', function($q){
                                    $q->where('status',1);
                                })->get();

        //$doctors = \App\Doctor::where('status',1)->with(['service'])->orderBy('asditle', 'desc')->get();
        $doctors = \App\Doctor::join('services', 'doctors.service_id', '=', 'services.id')
            ->select('doctors.*')
            ->where('doctors.status',1)
            ->orderBy('services.title' , 'ASC')
            ->orderBy('doctors.name' , 'ASC')
            ->get();
        return view('front.find_doctor', compact('doctors','services'));
    }

    public function patients_visitors() 
    {
		$patients = PatientList::where('status', 1)->get();
		$visitors = VisitorList::where('status', 1)->get();

        return view('front.patients_visitors', compact('patients', 'visitors'));
    }

	public function patients_visitors_detail()
    {
        $admissionDepositBanner = PatientList::where('admission_desc','<>','')->first();
        //return $admissionDepositBanner;
        $admissionDeposits=AdmissionDeposit::where('patient_list_id','20')->get();
        $roomRateBanner = PatientList::where('id',20)->first();
        $visitors = VisitorList::where('status', 1)->get();

        $standard_rooms = DB::table('room_rates')->select('room_rates.*','room_details.*')
            ->where('room_rates.title', 'like', '%standard%')
            ->leftJoin('room_details','room_rates.id','=','room_details.room_rate_id')
            ->get();

        $pediatric_rooms = DB::table('room_rates')->select('room_rates.*','room_details.*')
            ->where('room_rates.title', 'like', '%pedia%')
            ->leftJoin('room_details','room_rates.id','=','room_details.room_rate_id')
            ->get();
        $icu_rooms = DB::table('room_rates')->select('room_rates.*','room_details.*')
            ->where('room_rates.title', 'like', '%high dependency%')
            ->leftJoin('room_details','room_rates.id','=','room_details.room_rate_id')
            ->get();

        $rooms = RoomRate::where("patient_list_id", 20)->get();

        return view('front.patients_visitors_detail',compact(['visitors', 'roomRateBanner','admissionDeposits','admissionDepositBanner','standard_rooms','pediatric_rooms','icu_rooms', 'rooms']));
    }

    public function patient_transfer(){
        return view('front.patient_transfer');
    }

    public function kpj_advisor_series(){
        return view('front.kpj_advisor_series');
    }

    public function health_calendar(){
        $calenders = health_calender::orderBy('formated_time', 'desc')->where('status','1')->paginate(12);
        return view('front.calender', compact('calenders'));
    }

     public function health_calendar_show($id){
        $calender = health_calender::whereId($id)->first();
        return view('front.calender_show', compact('calender'));
    }

    public function show_events($id){
        $event = event::whereId($id)->first();
        return view('front.show_events', compact('event'));
    }

     public function kpj_advisor_series_show($id){
        $cat = kpj_category::where('status', true)->find($id);
        return view('front.show_kpj', compact('cat'));
    }

    public function search(request $request){
        $key = $request->search;
        $search = kpj::where('status', true)->where('title', 'like',"$key%")->get();
        if($request->filter){
            $search = kpj::where('status', true)->where('title', 'like',"%$request->filter%")->get();
        $request->search = $request->filter;
        }
        return view('front.search', compact('search', 'request'));
    }

    public function logout(){
            Auth::logout();

            return redirect()->to('/login');
    }

    public function load_more(request $request){
        $response = '';
        //return $request->all();

        if($request->type == 'event'){
            $events = event::where('status','1')->paginate(12);

            foreach($events as $key=>$ev){
                      if($key%2==0)   $response.='     <div class="col-md-5">';
                      else            $response.='      <div class="col-md-7">';

                            $response.='           <article class="blog-item">
                                            <div class="blog-thumbnail">
                                                <img src="'.$ev->image.'" alt="KPJ Sentosa launches new name">
                                                <div class="blog-date"><p class="day">'.date('d', strtotime($ev->date)).'</p><p class="monthyear">'.date('M, Y', strtotime($ev->date)).'</p></div>
                                            </div>
                                            <div class="blog-content">
                                            <h4 class="blog-title"><a href="latest_events/'.$ev->id.'"'.$ev->title.'</a></h4>
                                            <p>'.$ev->description.'</p>
                                            <a href="/latest_events/'.$ev->id.'" class="btn btn-danger btn-mini btn-rounded">READ MORE</a>
                                            </div>
                                        </article>



                                    </div>';


            }
        }
        elseif($request->type=='news'){
            $news = news::where('status','1')->paginate(12);
            foreach($news as $key=>$nw){
               if($key%2==0) $response.='<div class="col-md-5">';
               else          $response.='<div class="col-md-7">';

                $response.='                                       <article class="blog-item">
                                            <div class="blog-thumbnail">
                                                <img src="'.$nw->image.'">
                                                <div class="blog-date"><p class="day">'.date('d', strtotime($nw->date)).'</p><p class="monthyear">'.date('M, Y', strtotime($nw->date)).'</p></div>
                                            </div>
                                            <div class="blog-content">
                                                        <h4 class="blog-title"><a href="news/'.$nw->id.'">'.$nw->title.'</a></h4>
                                            <p>'.$nw->short_description.'</p>
                                            <a href="/news/'.$nw->id.'" class="btn btn-danger btn-mini btn-rounded">READ MORE</a>
                                            </div>
                                        </article>


                                    </div>';
                    }
            }

          elseif($request->type=='health_calendar'){
            $news = health_calender::where('status','1')->paginate(12);
            foreach($news as $key=>$nw){
               if($key%2==0) $response.='<div class="col-md-5">';
               else          $response.='<div class="col-md-7">';

                $response.='                                       <article class="blog-item">
                                            <div class="blog-thumbnail">
                                                <img src="'.$nw->image.'">
                                                <div class="blog-date"><p class="day">'.date('d', strtotime($nw->date)).'</p><p class="monthyear">'.date('M, Y', strtotime($nw->date)).'</p></div>
                                            </div>
                                            <div class="blog-content">
                                                        <h4 class="blog-title"><a href="news/'.$nw->id.'">'.$nw->title.'</a></h4>
                                            <p>'.$nw->description.'</p>
                                            <a href="/health_calendar/'.$nw->id.'" class="btn btn-danger btn-mini btn-rounded">READ MORE</a>
                                            </div>
                                        </article>


                                    </div>';
                    }
            }



        return $response;
    }

   public function latest_news_archives($date){
        $news = news::orderBy('formated_time', 'desc')->where('date','like',"%$date")->where('status','1')->paginate(12);
        return view('front.latest_news_archives', compact('news','date'));
   }
   public function latest_events_archives($date){
        $events = event::orderBy('formated_time', 'desc')->where('date','like',"%$date")->where('status','1')->paginate(12);
        return view('front.latest_events_archives', compact('events', 'date'));
   }

   public function load_dates($date){
        return view('common.load_dates', compact('date'));
   }

   public function health_calendar_archives(Request $request){

        $date = $request->date;
        $calenders = health_calender::orderBy('formated_time', 'desc')->where('date','like',"%$date")->where('status','1')->paginate(12);
        return view('front.calendar_archives', compact('calenders', 'date'));
   }

   public function email(){
        return view('emails.password');
   }

   public function saveimage(Request $request){
        if($request->hasfile('upload')){
                     $filename = 'upload-'.date('y-m-d-h-i-s').'.'.$request->file('upload')->getClientOriginalExtension();
            $request->file('upload')->move(public_path().'/uploads', $filename);

            return asset('/uploads/'.$filename);
        }
   }



}
