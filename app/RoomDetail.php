<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomDetail extends Model {
	protected $table = "room_details";

	protected $fillable = ['wards' , 'facilities' , 'rates_day' , 'room_rate_id','status'];

        public function room_rate(){

           return $this->belongsTo('App\RoomRate','room_rate_id');
        }

}
