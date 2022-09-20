<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
            'username' => 'required|min:6|max:50|unique:users|alpha_dash',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password_confirm' => 'required|min:6|same:password',
        ];
    }

    public function messages()
    {
        return [
            'required' => __('message.required'),
            'max' => __('message.max'),
            'min' => __('message.min'),
            'email.email' => __('message.email_email'),
            'password_confirm' => __('message.password_confirm_same'),
            'alpha_dash' => __('message.space'),
        ];
    }
}
