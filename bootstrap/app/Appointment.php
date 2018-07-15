<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model {
	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable = [
		'patient_id', 'doctor_id', 'appointment_day', 'appointment_date', 'appointment_time', 'status', 'formatted_time'
	];

	public function doctor(){
		return $this->belongsTo('\App\doctor');
	}

	public function patient(){
		return $this->belongsTo('\App\Patient');
	}

}
