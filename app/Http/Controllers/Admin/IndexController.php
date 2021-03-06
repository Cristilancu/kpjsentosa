<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Appointment;
use App\news;
use App\newsletter;
use App\career;
use App\application;
use App\service;
use App\feedback;
use App\screening_package;
use App\promotion_package;
use App\health_calender;
use App\event;
use App\helpful_info;
use App\kpj_category;
use App\kpj;
use DB;
use App\setting;
use App\health_info;
use Auth;
use App\index_banner;
use App\doctor;
use App\Patient;
use Helper;

class IndexController extends Controller
{
    //
    public function index(){
    	return view('admin.index');
    }


    public function latest_news(){
    	$news = news::orderBy('formated_time','desc')->paginate(10);
    	return view('admin.news.index', compact('news'));
    }

    public function latest_news_add(Request $request){

    	//return $request->all();
    	$news = new news;
    	$news->title = $request->title;
    	$news->short_description = $request->short_description;
    	$news->details = $request->details;
    	$news->alt = $request->alt;
    	$news->status = $request->status =='on'?'1':'0';
    	$news->date = $request->date;
        $news->formated_time = Helper::changeDate($request->date);
    	$news->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

    	if($request->hasFile('image')){
    		$filename = $news->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
    		$request->file('image')->move(public_path().'/uploads', $filename);
    		$news->image = asset('/uploads/'.$filename);
    		$news->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
    	}

    	return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
    }

     public function latest_news_edit($id,Request $request){

   
        $news = news::find($id);
        $news->title = $request->title;
        $news->short_description = $request->short_description;
        $news->details = $request->details;
        $news->alt = $request->alt;
        $news->status = $request->status =='on'?'1':'0';
        $news->date = $request->date;
        $news->formated_time = Helper::changeDate($request->date);
        $news->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

        if($request->hasFile('image')){
            $filename = $news->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/uploads', $filename);
            $news->image = asset('/uploads/'.$filename);
            $news->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

        return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
    }

    public function newsletters(){
    	$newsletters = newsletter::paginate(10);
    	return view('admin.newsletters.index', compact('newsletters'));
    }

    public function newsletters_add(request $request){
        $newsletters = new newsletter;
        $newsletters->status = $request->status =='on'?'1':'0';
        $newsletters->name = $request->name;
        $newsletters->email = $request->email;
        $newsletters->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();


        return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
    }

    public function newsletters_edit($id,request $request){
        $newsletters = newsletter::find($id);
        $newsletters->status = $request->status =='on'?'1':'0';
        $newsletters->name = $request->name;
        $newsletters->email = $request->email;
        $newsletters->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();


        return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
    }

    public function careers(){
    	$careers = career::paginate(10);
    	return view('admin.careers.index', compact('careers'));
    }

     public function add_careers(Request $request){
        $career = new career;
        $career->status = $request->status =='on'?'1':'0';
        $career->title = $request->title;
        $career->date = $request->date;
        $career->formated_time = Helper::changeDate($request->date);
     $str = explode('this_is_yossa',$request->description);

     

        $career->requirements = $str[1];
        $career->description = $str[0];
        $career->footer_content = $str[2];

        $career->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

        	return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
    }

    public function edit_career(Request $request){

    	 $career = career::find($request->id);
        $career->status = $request->status =='on'?'1':'0';
        $career->title = $request->title;
        $career->date = $request->date;
        $career->formated_time = Helper::changeDate($request->date);
        $str = explode('this_is_yossa',$request->description);

        $career->requirements = $str[1];
        $career->description = $str[0];
        $career->footer_content = $str[2];

        $career->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

        	return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
    }

    public function applications(){
    	$applications = application::orderBy('id', 'desc')->paginate(10);
    	return view('admin.careers.applications', compact('applications'));
    }





    public function services(){

    	$services = service::paginate(10);
    	return view('admin.services.index', compact('services'));
    }

    public function add_services(Request $request){
    	$service = new service;
        $service->status = $request->status =='on'?'1':'0';
    	$service->title = $request->title;
    	$service->description = $request->description;
    	$service->alt = $request->alt;
    	$service->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();


    	if($request->hasFile('image')){
    		$filename = $service->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
    		$request->file('image')->move(public_path().'/uploads', $filename);
    		$service->image = asset('/uploads/'.$filename);
    		$service->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
    	}

    		return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
    }

    public function add_details_to_service($id,Request $request){
        $service = service::find($id);
        $service->title = $request->title;
        $service->details = $request->details;
        $service->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

        return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
    }



    public function add_helpful_info($id, Request $request){
        $hp = new helpful_info;
        $hp->title = $request->title;
        $hp->service_id = $request->id;
        $hp->details = $request->details;
        $hp->status = $request->status =='on'?'1':'0';
        $hp->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

        return redirect()->back()->with('message', 'The information has been saved/updated successfully.');

    }
    public function edit_helpful_info($id, $hid, Request $request){
        $hp = helpful_info::find($hid);
        $hp->title = $request->title_edit;
        $hp->service_id = $request->id;
        $hp->details = $request->details_edit;

        $hp->status = $request->status =='on'?'1':'0';;
        $hp->save();

        $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

        return redirect()->back()->with('message', 'The information has been saved/updated successfully.');

    }




    public function action_delete($id, $model){
        if($id=='all'){
            // dd($model);
            if($model == 'kpj_categories')
            {
                DB::table('kpjs')->truncate();
            }
            DB::table($model)->truncate();
            return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
        }

        switch ($model) {
            case 'appointment':
                $app = Appointment::find($id)->delete();
                break;
            case 'news':
                $app = news::find($id)->delete();
                break;
            case 'event':
                $app = event::find($id)->delete();
                break;
            case 'helpful_info':
                $app = helpful_info::find($id)->delete();
                break;
            case 'category':
                $app = kpj_category::find($id);
                foreach ($app->listings as $key => $value) {
                $value->delete();
                }
                $app->delete();
                break;
            case 'kpj':
                $app = kpj::find($id)->delete();
                break;
            case 'feedback':
                $app = feedback::find($id)->delete();
                break;
            case 'screening_package':
                $app = screening_package::find($id)->delete();
                break;
            case 'promotion_package':
                $app = promotion_package::find($id)->delete();
                break;
            case 'newsletters':
                $app = newsletter::find($id)->delete();
                break;
            case 'calender':
                $app = health_calender::find($id)->delete();
                break;
            case 'career':
                $app = career::find($id)->delete();
                break;
            case 'application':
                $app = application::find($id)->delete();
                break;
            case 'service':
                $app = service::find($id)->delete();
                break;
            case 'health_info':
                $app = helpful_info::find($id)->delete();
                break;
            case 'index_banner':
                $app = index_banner::find($id)->delete();
                break;
            case 'doctor':
                $app = doctor::find($id)->delete();
                break;
            case 'Patient':
                $app = Patient::find($id)->delete();
                break;


            default:
                # code...
                break;
        }

//        if(isset($app)) $app->delete();


    		return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
    }

     public function action_delete_file($model,$id, $type){
        if($id=='all'){

        DB::table($model)->truncate();
        return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
        }
        switch ($model) {
            case 'news':
                $app = news::find($id);
                break;
            case 'event':
                $app = event::find($id);
                break;
            case 'helpful_info':
                $app = helpful_info::find($id);
                break;
             case 'category':
            $app = kpj_category::find($id);
            break;
         case 'kpj':
            $app = kpj::find($id);
            break;
        case 'feedback':
            $app = feedback::find($id);
            break;
        case 'screening_package':
        $app = screening_package::find($id);
        break;
        case 'promotion_package':
        $app = promotion_package::find($id);
        break;
        case 'newsletters':
        $app = newsletter::find($id);
        break;
        case 'calender':
        $app = health_calender::find($id);
        break;
         case 'career':
        $app = career::find($id);
        break;
         case 'application':
        $app = application::find($id);
        break;
          case 'service':
        $app = service::find($id);
        break;
          case 'health_info':
        $app = helpful_info::find($id);
        break;
          case 'index_banner':
        $app = index_banner::find($id);
          break;

            
            default:
                # code...
                break;
        }

        if(isset($app)){
            $app->{$type} = null;
            $app->save();
        }


            return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
    }

    public function show_service($id){
    	$service = service::find($id);
    	return view('admin.services.show', compact('service'));
    }

    public function edit_service($id, Request $request){
    	$service = service::find($id);
    	$service->title = $request->title;
        $service->status = $request->status =='on'?'1':'0';
    	$service->description = $request->description;
    	$service->alt = $request->alt;
    	$service->isFeatured = $request->has('isFeatured')?1:0;
    	$service->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

        if($request->hasFile('image')){
            $filename = $service->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/uploads', $filename);
            $service->image = asset('/uploads/'.$filename);
            $service->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

            return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
    }

    public function screening_packages(){
    	$packages = screening_package::paginate(10);
    	return view('admin.packages.screening', compact('packages'));
    }

    public function save_screening_packages(Request $request){
    	$sp =  new screening_package;
    	$sp->title = $request->title;
        $sp->status = $request->status =='on'?'1':'0';
    	$sp->description = $request->description;
    	$sp->details = $request->details;
    	$sp->cost_price = $request->cost_price;
    	$sp->sale_price = $request->sale_price;
    	$sp->alt = $request->alt;
    	$sp->website = $this->web_replace($request->website);
    	$sp->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();


    	if($request->hasFile('image')){
    		$filename = $sp->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
    		$request->file('image')->move(public_path().'/uploads', $filename);
    		$sp->image = asset('/uploads/'.$filename);
    		$sp->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
    	}

    	if($request->hasFile('image_large')){
    		$filename = $sp->id.'-large-'.date('y-m-d-h-i-s').'.'.$request->file('image_large')->getClientOriginalExtension();
    		$request->file('image_large')->move(public_path().'/uploads', $filename);
    		$sp->image_large = asset('/uploads/'.$filename);
    		$sp->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
    	}

    	if($request->hasFile('pdf')){
    		$filename = $sp->id.'-pdf-'.date('y-m-d-h-i-s').'.'.$request->file('pdf')->getClientOriginalExtension();
    		$request->file('pdf')->move(public_path().'/uploads', $filename);
    		$sp->pdf = asset('/uploads/'.$filename);
    		$sp->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
    	}

    	return redirect()->back()->with('message', 'The information has been saved/updated successfully.');


    }


    public function edit_screening_packages($id,Request $request){
        $sp =screening_package::find($id);
        $sp->title = $request->title;
        $sp->status = $request->status =='on'?'1':'0';
        $sp->description = $request->description;
        $sp->details = $request->details;
        $sp->cost_price = $request->cost_price;
        $sp->sale_price = $request->sale_price;
        $sp->alt = $request->alt;
        $sp->website = $this->web_replace($request->website);
        $sp->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();


        if($request->hasFile('image')){
            $filename = $sp->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/uploads', $filename);
            $sp->image = asset('/uploads/'.$filename);
            $sp->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

        if($request->hasFile('image_large')){
            $filename = $sp->id.'-large-'.date('y-m-d-h-i-s').'.'.$request->file('image_large')->getClientOriginalExtension();
            
            $request->file('image_large')->move(public_path().'/uploads', $filename);
            $sp->image_large = asset('/uploads/'.$filename);
            $sp->save();



         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }



        if($request->hasFile('pdf')){
            $filename = $sp->id.'-pdf-'.date('y-m-d-h-i-s').'.'.$request->file('pdf')->getClientOriginalExtension();
            $request->file('pdf')->move(public_path().'/uploads', $filename);
            $sp->pdf = asset('/uploads/'.$filename);
            $sp->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

        return redirect()->back()->with('message', 'The information has been saved/updated successfully.');


    }

     public function promotion_packages(){
    	$packages = promotion_package::paginate(10);
    	return view('admin.packages.packages', compact('packages'));
    }

        public function save_promotion_packages(Request $request){
    	$sp =  new promotion_package;
    	$sp->title = $request->title;
              $sp->status = $request->status =='on'?'1':'0';
    	$sp->description = $request->description;
    	$sp->details = $request->details;
    	$sp->cost_price = $request->cost_price;
    	$sp->sale_price = $request->sale_price;
    	$sp->alt = $request->alt;
    	$sp->website = $this->web_replace($request->website);
    	$sp->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();


    	if($request->hasFile('image')){
    		$filename = $sp->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
    		$request->file('image')->move(public_path().'/uploads', $filename);
    		$sp->image = asset('/uploads/'.$filename);
    		$sp->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
    	}

    	if($request->hasFile('image_large')){
    		$filename = $sp->id.'-large-'.date('y-m-d-h-i-s').'.'.$request->file('image_large')->getClientOriginalExtension();
    		$request->file('image_large')->move(public_path().'/uploads', $filename);
    		$sp->image_large = asset('/uploads/'.$filename);
    		$sp->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
    	}

    	if($request->hasFile('pdf')){
    		$filename = $sp->id.'-pdf-'.date('y-m-d-h-i-s').'.'.$request->file('pdf')->getClientOriginalExtension();
    		$request->file('pdf')->move(public_path().'/uploads', $filename);
    		$sp->pdf = asset('/uploads/'.$filename);
    		$sp->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
    	}

    	return redirect()->back()->with('message', 'The information has been saved/updated successfully.');


    }

      public function edit_promotion_packages($id,Request $request){
        $sp = promotion_package::find($id);
        $sp->title = $request->title;
        $sp->description = $request->description;
        $sp->details = $request->details;
        $sp->cost_price = $request->cost_price;
              $sp->status = $request->status =='on'?'1':'0';
        $sp->sale_price = $request->sale_price;
        $sp->alt = $request->alt;
        $sp->website = $this->web_replace($request->website);
        $sp->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();


        if($request->hasFile('image')){
            $filename = $sp->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/uploads', $filename);
            $sp->image = asset('/uploads/'.$filename);
            $sp->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

        if($request->hasFile('image_large')){
            $filename = $sp->id.'-large-'.date('y-m-d-h-i-s').'.'.$request->file('image_large')->getClientOriginalExtension();
            $request->file('image_large')->move(public_path().'/uploads', $filename);
            $sp->image_large = asset('/uploads/'.$filename);
            $sp->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

        if($request->hasFile('pdf')){
            $filename = $sp->id.'-pdf-'.date('y-m-d-h-i-s').'.'.$request->file('pdf')->getClientOriginalExtension();
            $request->file('pdf')->move(public_path().'/uploads', $filename);
            $sp->pdf = asset('/uploads/'.$filename);
            $sp->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

        return redirect()->back()->with('message', 'The information has been saved/updated successfully.');


    }
    public function health_calender(){
        $calenders = health_calender::orderBy('formated_time','desc')->paginate(10);
        return view('admin.calender', compact('calenders'));
    }

    public function health_calender_add(Request $request){
            $news = new health_calender;
        $news->title = $request->title;
        $news->description = $request->description;
        $news->details = $request->details;
        $news->alt = $request->alt;
        $news->status = $request->status =='on'?'1':'0';
        $news->slug = $request->date;
        $news->date = $request->date;
        $news->formated_time = Helper::changeDate($request->date);
        $news->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

        if($request->hasFile('image')){
            $filename = $news->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/uploads', $filename);
            $news->image = asset('/uploads/'.$filename);
            $news->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

    return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
    }

      public function health_calender_edit($id,Request $request){
            $news = health_calender::find($id);
        $news->title = $request->title;
        $news->description = $request->description;
        $news->details = $request->details;
        $news->alt = $request->alt;
        $news->status = $request->status =='on'?'1':'0';
        $news->slug = $request->date;
        $news->date = $request->date;
        $news->formated_time = Helper::changeDate($request->date);
        $news->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

        if($request->hasFile('image')){
            $filename = $news->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/uploads', $filename);
            $news->image = asset('/uploads/'.$filename);
            $news->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

    return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
    }
        public function events_list(){
        $events = event::orderBy('formated_time','desc')->paginate(10);
        return view('admin.events', compact('events'));
    }

    public function events_list_add(Request $request){
                $news = new event;
        $news->title = $request->title;
        $news->description = $request->description;
        $news->details = $request->details;
        $news->alt = $request->alt;
        $news->status = $request->status =='on'?'1':'0';
       $news->date = $request->date;
       $news->formated_time = Helper::changeDate($request->date);
        $news->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

        if($request->hasFile('image')){
            $filename = $news->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/uploads', $filename);
            $news->image = asset('/uploads/'.$filename);
            $news->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

         return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
    
    }

      public function events_list_edit($id,Request $request){

                $news = event::find($id);
        $news->title = $request->title;
        $news->description = $request->description;
        $news->details = $request->details;
        $news->alt = $request->alt;
        $news->status = $request->status =='on'?'1':'0';
       $news->date = $request->date;
       $news->formated_time = Helper::changeDate($request->date);
        $news->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

        if($request->hasFile('image')){
            $filename = $news->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/uploads', $filename);
            $news->image = asset('/uploads/'.$filename);
            $news->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

         return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
    
    }

    public function kpj_advisor_series_list(){
        
        $kpjs = kpj::all();
        $categories=kpj_category::all();
        return view('admin.kpj', compact('kpjs', 'categories'));
    }

     public function kpj_advisor_series_list_add(Request $request){
              $news = new kpj;
        $news->title = $request->title;
      
        $news->description = $request->short_description;
        $news->details = $request->details;
        $news->alt = $request->alt;
        $news->category_id = $request->category;
        $news->website = $this->web_replace($request->website);
        $news->status = $request->status =='on'?'1':'0';
        $news->date = $request->date;
        $news->formated_time = Helper::changeDate($request->date);
        $news->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

        if($request->hasFile('image')){
            $filename = $news->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/uploads', $filename);
            $news->image = asset('/uploads/'.$filename);
            $news->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

        if($request->hasFile('pdf')){
            $filename = $news->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('pdf')->getClientOriginalExtension();
            $request->file('pdf')->move(public_path().'/uploads', $filename);
            $news->pdf = asset('/uploads/'.$filename);
            $news->formated_time = $request->file('pdf')->getClientOriginalName();
            $news->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

        return redirect()->back()->with('message', 'The information has been saved/updated successfully.');

    }

    public function kpjs_edite($id, request $request){
         $news =kpj::find($id);
        $news->title = $request->title;
      
        $news->description = $request->short_description;
        $news->details = $request->details;
        $news->alt = $request->alt;
        $news->category_id = $request->category;
        $news->website = $this->web_replace($request->website);
        $news->status = $request->status =='on'?'1':'0';
        $news->date = $request->date;
        $news->formated_time = Helper::changeDate($request->date);
        $news->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

        if($request->hasFile('image')){
            $filename = $news->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/uploads', $filename);
            $news->image = asset('/uploads/'.$filename);
            $news->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

        if($request->hasFile('pdf')){


            $filename = $news->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('pdf')->getClientOriginalExtension();
            $request->file('pdf')->move(public_path().'/uploads', $filename);
            $news->pdf = asset('/uploads/'.$filename);
            $news->formated_time = $request->file('pdf')->getClientOriginalName();
            $news->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

        return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
    }

     public function kpj_add_category(Request $request){
        $cat = new kpj_category;
       
        $cat->title = $request->category;
        $cat->alt = $request->alt;
           $cat->status = $request->status =='on'?'1':'0';

          if($request->hasFile('image')){
            $filename = $cat->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/uploads', $filename);
            $cat->image = asset('/uploads/'.$filename);
            $cat->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }
        $cat->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

         return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
    }


    public function change_password(Request $request){
        if($request->old_password != $request->password){
            return redirect()->back()->with('error', 'Password does not match');
        }

        $user = Auth::user();
        $user->password = bcrypt($request->password);
        $user->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

        return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
    }

    public function change_avatar(Request $request){
        $plan = Auth::user();

        if($request->hasFile('image')){
            $filename = 'plan-'.$plan->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/images/', $filename);
            $plan->image = asset('/images/'.$filename);
        }

        $plan->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        return redirect()->back()->with('message', 'Thanks');
    }



    public function save_preview(Request $request){
        $model = $request->model;
        $check = setting::whereKey($model)->first();
        if(!$check){
            $check = new setting;
            $check->key = $model;
        }

        for($i=1; $i<=5; $i++){
            $check->{'line'.$i} = $request->{'line'.$i};

        }

       
        $check->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

         if($request->hasFile('image')){
            $filename = $check->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/uploads', $filename);
            $check->details = asset('/uploads/'.$filename);
            $check->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

        $check->status = $request->status =='on'?'1':'0';
        $check->save();

        return redirect()->back()->with('message', 'The information has been saved/updated successfully.')->with('ck','yes');
    }

    public function save_preview_line($line,request $request){
        $model = $request->model;
        $check = setting::whereKey($model)->first();
        if(!$check){
            $check = new setting;
            $check->key = $model;
        }

        $check->{$line} = $request->data;
        $check->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

        return 'ok';

    }

    public function action_delete_selected(Request $request){
        foreach($request->ids as $id){
         $this->action_delete($id, $request->model);
        }

        return 'ok';
    }


    public function kpj_show($id){
        $kpj = kpj::find($id);
        return view('admin.kpj_show', compact('kpj'));
    }

    public function kpj_edit($id, request $request){
        $kpj = kpj::find($id);
        $kpj->slug = $request->title;
        $kpj->details = $request->details;
        $kpj->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

         return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
    }

    public function kpjs_edit($id, request $request){
        $cat = kpj_category::find($id);
       
        $cat->title = $request->title;
        $cat->alt = $request->alt;
           $cat->status = $request->status =='on'?'1':'0';

          if($request->hasFile('image')){
            $filename = $cat->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/uploads', $filename);
            $cat->image = asset('/uploads/'.$filename);
            $cat->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }
        $cat->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

          return redirect()->back()->with('message', 'The information has been saved/updated successfully.');

    }

    public function index_banner_list(){

        $indexes = index_banner::orderBy('display_order', 'asc')->paginate(10);

        foreach($indexes as $ib){
             if(strtotime(date('Y-m-d')) >strtotime(Helper::changeDate($ib->end))){
                $ib->status=null;
                $ib->save();
             }

        }
        return view('admin.index_banner', compact('indexes'));
    }

    public function index_page(){
  
        return view('admin.index_page', compact('indexes'));
    }

    public function index_banner_add(Request $request){
       

        $th =[
            'option5'=>'',
            'option6'=>'Find Doctor',
            'option7'=>'Get Direction',
            'option8'=>'option8',
            'option9'=>'Get Appointment'
        ];


        $ib = new index_banner;

        $ib->title = $request->title;
        $ib->status = $request->status =='on'?'1':'0';
       $ib->description = $request->description;
        $ib->display_order = $request->display_order;
        $ib->start = $request->start;
        $ib->end = $request->end;

        if(strtotime(date('Y-m-d')) >strtotime(Helper::changeDate($ib->end))){
                $ib->status=null;
        }

        $ib->align = $request->align;
         $ib->alt = $request->alt;
       $ib->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();       

        $align = $request->align;

        if($request->{'text_'.$align}=='option8'){
            $th['option8']=$request->{'other_'.$align};
             $ib->slug = '1';
        }

        if($request->hasFile('image')){
            $filename = $ib->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/uploads', $filename);
            $ib->image = asset('/uploads/'.$filename);
            $ib->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

        $ib->header = $request->{'heading_'.$align};
        $ib->sub_header = $request->{'sub_heading_'.$align};
        $ib->website = $this->web_replace($request->{'website_'.$align});
        $ib->text = $th[$request->{'text_'.$align}];
        $ib->alt_2 = $request->{'alt_'.$align};

         if($request->hasFile('image_'.$align)){
            $filename = $ib->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image_'.$align)->getClientOriginalExtension();
            $request->file('image_'.$align)->move(public_path().'/uploads', $filename);
            $ib->image_2 = asset('/uploads/'.$filename);
            $ib->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

       $ib->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

//        if(!$ib->image_2){
//            $ib->status='0';
//            $ib->save();
//            return redirect()->back()->with('error', 'Your banner has been saved, but is inactive, please add and Icon Image and update');
//        }

       return redirect()->back()->with('message', 'The information has been saved/updated successfully.');

    }


      public function index_banner_edit($id,Request $request){
       
        //return $request->all();
        $th =[
            'option5'=>'',
            'option6'=>'Find Doctor',
            'option7'=>'Get Direction',
            'option8'=>'option8',
            'option9'=>'Get Appointment'
        ];


        $ib =  index_banner::find($id);
        $ib->status = $request->status =='on'?'1':'0';
        $ib->title = $request->title;
        $ib->description = $request->description;
        $ib->display_order = $request->display_order;
        $ib->start = $request->start;
        $ib->end = $request->end;
        $ib->align = $request->align;
         $ib->alt = $request->alt;
       $ib->save();

       if(strtotime(date('Y-m-d')) >strtotime(Helper::changeDate($ib->end))){
                $ib->status=null;
        }

         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();       

        $align = $request->align;

        if($request->{'text_'.$align}=='option8'){
            $th['option8']=$request->{'other_'.$align};
            $ib->slug = '1';
        }

        if($request->hasFile('image')){
            $filename = $ib->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/uploads', $filename);
            $ib->image = asset('/uploads/'.$filename);
            $ib->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

        $ib->header = $request->{'heading_'.$align};
        $ib->sub_header = $request->{'sub_heading_'.$align};
        $ib->website = $this->web_replace($request->{'website_'.$align});
        $ib->text = $th[$request->{'text_'.$align}];
        $ib->alt_2 = $request->{'alt_'.$align};

         if($request->hasFile('image_'.$align)){
            $filename = $ib->id.'-'.date('y-m-d-h-i-s').'.'.$request->file('image_'.$align)->getClientOriginalExtension();
            $request->file('image_'.$align)->move(public_path().'/uploads', $filename);
            $ib->image_2 = asset('/uploads/'.$filename);
            $ib->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();
        }

       $ib->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

//         if(!$ib->image_2){
//            $ib->status='0';
//            $ib->save();
//            return redirect()->back()->with('error', 'Your banner has been saved, but is inactive, please add and Icon Image and update');
//        }


       return redirect()->back()->with('message', 'The information has been saved/updated successfully.');

    }

    public function update_display_banner($id, $val){
        $dp = index_banner::find($id);
        $dp->display_order = $val;
        $dp->save();
         $chk = setting::whereKey('last_date')->first();
        if(!$chk){
            $chk = new setting;
            $chk->key = 'last_date';
        }
        $chk->line1 = date('d M, Y @ h:i a');
        $chk->save();

        return redirect()->back()->with('message', 'ok');
    }
   

   public function reload(){
        return redirect()->back()->with('message', 'The information has been saved/updated successfully.' );
   }

   public function web_replace($str){
        return preg_replace('/\s+/', '', $str);
   }

 
}
