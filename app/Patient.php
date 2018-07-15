<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model {

    protected $fillable = ["mrn_number"];
    protected $table = "patients";
	public function user(){
		return $this->belongsTo('\App\User', 'user_id');
	}

	public function appointments(){
		return $this->hasMany('\App\Appointment', 'patient_id');
	}

	public function country(){
		return $this->belongsTo('\App\Country', 'country_id');
	}
}
