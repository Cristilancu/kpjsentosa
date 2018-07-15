<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kpj_category extends Model
{
    //
        use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    public function listings(){
    	return $this->hasMany('App\kpj', 'category_id');
    }
}
