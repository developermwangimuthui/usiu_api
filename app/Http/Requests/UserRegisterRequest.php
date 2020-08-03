<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' =>  'required|min:3',
            'lastname' =>  'required|min:3',
            'user_type' => 'required',
            'email' =>      'required|email',
            'profile_pic_path' =>   'required',
            'username' =>     'required|min:3',
            'phone' =>      'required',
            'DOB' =>      'required',
            'gender' =>      'required',
            'about' =>      'required_if:user_type,==,coach',
            'password' =>   'required',
          ];
    }
}
