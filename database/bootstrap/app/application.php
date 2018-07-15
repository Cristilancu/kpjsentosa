<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class application extends Model
{
    //

        use SoftDeletes;

    protected $dates = ['deleted_at'];
    public function career(){
    	return $this->belongsTo('App\career');
    }
}
