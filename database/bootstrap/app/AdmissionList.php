<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmissionList extends Model {

	protected $fillable = ['type_of_cases' , 'initial_deposit' , 'patient_lists_id'];
      
 
        public function patientLists(){

             return $this->belongsTo('App\PatientList');
          }
}
