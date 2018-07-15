<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class promotion_package extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
     
}