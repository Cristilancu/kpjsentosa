<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NavbarMenu extends Model {


    protected $dates = ['deleted_at'];
	use SoftDeletes;

    public function parent(){
    	return $this->belongsTo('App\NavbarMenu', 'parent_id');
    }

    public function children(){
    	return $this->hasMany('App\NavbarMenu', 'parent_id');
    }
}
