<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class VisitorListRequest extends Request {

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
			'title'=> 'required',
            'short_desc'=>'required',
            'image_path' =>'required',
            'image_alt' =>'required',
		];
	}

        public function messages()
    {
        return[
            'title.required'=>'Title is required',
            'short_desc.required'=>'Short Description is required',
            'image_path.required'=>'Icon Image is required',
            'image_path.mimes' => 'Icon Image type must be png type',
            'image_alt.required'=>'Icon Image Alt Text',
        ];
    }

}
