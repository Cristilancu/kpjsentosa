<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class feedback extends Model
{
    //
    protected $table = 'feedback';
        use SoftDeletes;

    protected $dates = ['deleted_at'];

}
