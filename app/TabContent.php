<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TabContent extends Model {

	protected $fillable = ['title' , 'desc' , 'visitor_lists_id'];

       public function visitor_list(){

             return $this->belongsTo('App\VisitorList');
         }

}
