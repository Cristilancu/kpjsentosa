<?php

namespace App\Helpers;

use App\news;
use App\career;
use App\setting;
use App\application;
use App\feedback;
use App\event;
use App\service;
use App\screening_package;
use App\promotion_package;
use App\health_calender;
use App\kpj_category;
use App\kpj;
use App\index_banner;

class Helper 
{
    //

    public static function get_previous($model, $id){
        switch ($model) {
            case 'news':
                return news::where('id','<', $id)->orderBy('id','desc')->first();
                break;
            case 'event':
                return event::where('id','<', $id)->orderBy('id','desc')->first();
                break;
             case 'health_calender':
                 return health_calender::where('id','<', $id)->orderBy('id','desc')->first();
                break;
            
            default:
                # code...
                break;
        }
    	return news::where('id','<', $id)->first();
    }

    public static function get_next($model, $id){
        switch ($model) {
            case 'news':
                return news::where('id','>', $id)->first();
                break;
            case 'event':
                return event::where('id','>', $id)->first();
                break;
            case 'health_calender':
                 return health_calender::where('id','>', $id)->first();
                break;
            
            default:
                # code...
                break;
        }
    	return news::where('id','>', $id)->first();
    }

    public static function hasSetting($key){
    	return setting::where('key',$key)->first();
    }

    public static function getApplications($limit=null){
    	return application::take($limit)->orderBy('id', 'desc')->get();
    }

    public static function getFeedbacks($limit=null){
    	return feedback::take($limit)->orderBy('id', 'desc')->get();
    }

    public static function getCareers(){
    	return career::where('status','1')->get();
    }

    public static function getNews($limit=null){
    	return news::take($limit)->orderBy('id', 'desc')->get();
    }

    public static function getEvents($limit=null){
    	return event::take($limit)->orderBy('id', 'desc')->get();
    }

    public static function getServices(){
    	return service::where('status','1')->get();
    }

    public static function getScreeningpackages(){
        return screening_package::where('status','1')->get();
    }

     public static function getPromotionpackages(){
        return promotion_package::where('status','1')->get();
    }

    public static  function getCalenders(){
        return health_calender::where('status','1')->get();
    }

    public static function getCategories(){
        return kpj_category::where('status','1')->get();
    }

    public static function getListings(){
        return kpj::paginate(20);
    }

    public static function getBanners(){
        $indexes = index_banner::orderBy('display_order')->where('status','1')->get();


        return $indexes;
    }

    public static function changeDate($date){
        if(!date_create_from_format('d/m/Y', $date)){
            if(date_create_from_format('m/d/Y', $date) ){
                return  date_format(date_create_from_format('m/d/Y', $date), 'Y-m-d');
            }
            else{
                return $date;
            }
        }
     $nd =   date_format(date_create_from_format('d/m/Y', $date), 'Y-m-d');
        return $nd;
    }

    public static function getArchives($type, $date){
        if($type=='event'){
            return event::where('date', 'like', "%$date%")->where('status' , '1')->get();
        }

         if($type=='news'){
            return news::where('date', 'like', "%$date%")->where('status' , '1')->get();
        }

        if($type=='health_calender'){
            return health_calender::where('date', 'like', "%$date%")->where('status' , '1')->get();
        }
    }

    public static function getLatestDate($type){
        $y = false;
        switch ($type) {
            case 'news':
                $n = news::orderBy('formated_time', 'desc')->where('status', '1')->first();
                if($n) $y =(int) date('Y', strtotime($n->formated_time));
                # code...
                break;
              case 'event':
                $n = event::orderBy('formated_time', 'desc')->where('status', '1')->first();
                if($n) $y =(int) date('Y', strtotime($n->formated_time));
                # code...
                break;
            
            default:
                # code...
                break;
        }

        return $y;
    }

    public static function fix_link($link){
        if (strpos($link, 'http') !== false) return $link;
        else return 'http://'.$link;           
    }

}
