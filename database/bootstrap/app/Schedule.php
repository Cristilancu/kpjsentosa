<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule';

    public $timestamps = false;

    protected $fillable = [
        'doctor_id', 'status', 'max_patients', 'bulk_option', 'bulk_values', 'appointment_time', 'date'
    ];
}
