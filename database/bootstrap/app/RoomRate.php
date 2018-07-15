<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomRate extends Model {

    protected $table = 'room_rates';

	protected $fillable = ['title' , 'status','patient_list_id'];
 

        public function patient_list(){

            return $this->belongsTo('App\PatientList','patient_list_id');
       }

       public function room_details()
       {
           return $this->hasMany('App\RoomDetail', 'room_rate_id');
       }


}
