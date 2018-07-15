<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class doctor extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name', 'service_id', 'speciality', 'degress', 'experience', 'image', 'details', 'clinic_hours', 'status', 'type', 'image_alt_text', 'enable_link', 'formatted_time'
    ];

    public function service()
    {
        return $this->belongsTo('App\service');
    }

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }

    public function schedules()
    {
        return $this->hasMany('App\Schedule');
    }
}
