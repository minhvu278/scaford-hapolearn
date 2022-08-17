<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name' => 'nullable|max:200',
            'email' => 'nullable|max:50|email|unique:users',
            'phone' => 'nullable|regex:/[0-9]{9,}/',
            'birthday' => 'nullable',
            'address' => 'nullable|string',
            'intro' => 'nullable|string',
            'avatar' => 'nullable|image'
        ];
    }

    public function messages()
    {
        return [
            'required' => __('message.required'),
            'max' => __('message.max'),
            'min' => __('message.min'),
            'string' => __('message.string'),
            'email' => __('message.email'),
            'unique' => __('message.unique'),
            'regex' => __('message.regex')
        ];
    }

    public function attributes()
    {
        return [
            'name' => __('profile.name'),
            'phone' => __('profile.phone'),
            'date_of_birth' => __('profile.date_of_birth'),
            'address' => __('profile.address'),
            'intro' => __('profile.about'),
        ];
    }
}
