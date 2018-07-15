<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitorList extends Model {

             protected $fillable = ['title' , 'short_desc' , 'image_path' , 'image_alt' , 'status'];

             public function tab_content(){

                  return $this->hasMany('App\TabContent');
               }



}
