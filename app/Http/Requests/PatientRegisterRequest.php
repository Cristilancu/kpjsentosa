<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PatientRegisterRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
	    'mrn_number' => 'sometimes',
            'last_name' => 'required',
            'first_name' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'passport_number' => 'required',
            'contact_number' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'address' => 'required',
            'postal_code' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country_id' => 'required|exists:countries,id',
            'newsletter' => 'required',
            'agree' => 'required',
		];
	}


        public function messages()
    {
        return[
                'last_name.required'=>'Patient\'s Last Name is required',
                'first_name.required' =>'Patient\'s First Name is required',
                'date_of_birth.required'=>'Date of Birth is required',
                'gender.required' => 'Gender is required',
                'passport_number.required'=>'NRIC/Passport No is required',
                'contact_number.required'=>'Contact No is required',
                'email.required' => 'Email is required',
                'password.required'=>'Password is required',
                'address.required' => 'Address is required',
                'postal_code.required'=> 'Postal Code is required',
                'city.required' => 'City is required',
                'state.required' =>'State is required',
                'country_id.required'=>'Country is required',
                'newsletter.required'=>'check on KPJ Sentosa KL Specialist Hospital\'s newsletter',
                'agree.required' => 'Agree to the terms of use',
                'email.email' => 'Enter valid Email',
                'email.unique' => 'This Email used Before',

];}

      

}
