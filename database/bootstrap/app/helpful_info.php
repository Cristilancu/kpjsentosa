<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class helpful_info extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
     
}
