<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class service extends Model
{
    //
        use SoftDeletes;

    protected $dates = ['deleted_at'];


    public function helpful_infos(){
        return $this->hasMany('App\helpful_info');
    }

    public function doctors(){
        return $this->hasMany('App\doctor');
    }
}
