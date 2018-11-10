<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
			'name' => 'required',
			'nickname' => 'required',
			'email' => 'required|email|unique:users,email',
			'tel' => 'required|tel',
			'password' => 'required|between:8,20|confirmed',
			'password_confirmation' => 'required',
		];
    }
}