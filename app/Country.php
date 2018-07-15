<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model {

    protected $dates = ['deleted_at'];
    protected $fillable = ['calling_code', 'code', 'name'];
	use SoftDeletes;

	public function patients(){
		return $this->hasMany('\App\Patient', 'country_id');
	}

}
