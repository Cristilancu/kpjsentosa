<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientList extends Model {

	protected $fillable = ['title','short_desc','image_path','desc','room_rate_desc','admission_desc' ,'image_alt'];
        protected $table = 'patient_lists';

        public function room_rates()
        {
          return $this->hasMany('App\RoomRate','patient_list_id');
        }

      public function admission_list(){
            return $this->hasMany('App\AdmissionList');
        }

  


}
