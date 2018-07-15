<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmissionDeposit extends Model {

	protected $fillable = ['case_type' , 'initial_deposit' , 'status','patient_list_id'];
    protected $table = 'admission_deposit';
 
}
