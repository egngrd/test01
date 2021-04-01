<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        return [
            'name' => 'required|min:2|max:100',
            'lname' => 'required|min:2|max:100',
            'email' => 'required|email|unique:users|min:4|max:80',
            'password' => 'required|confirmed|min:4',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'We need your name to continue.',
            'lname.required' => 'We need your last name to continue.',
            'email.required' => 'We need your email to continue.',
            'password.required' => 'Password need',
            'password.confirmed' => 'Your passwords don\'t match, please try again.',
        ];
    }
}
