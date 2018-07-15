<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ApplicationRequest extends Request {

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
			//
			'emai'=>'required|email',
			'cv'=>'mimes:jpeg,bmp,png,doc,pdf,jpg',
			'g-recaptcha-response'=>'required'
		];
	}

}
