<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\User;

class UserRequest extends FormRequest
{
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
        $user = User::find($this->route('user'));

        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
                {
                    return [];
                }
            case 'POST':
                {
                    return [
                        'name'     => 'required|string|max:255',
                        'email'    => 'required|string|email|max:255|unique:users',
                    ];
                }
            case 'PUT':
            case 'PATCH':
                {
                    return [
                        'name'     => 'required|string|max:255',
                        'email'    => 'required|email|unique:users,email,'.$user->id,
                    ];
                }
            default:break;
        }
    }
}
