<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOptionRequest extends FormRequest
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
            'options' => 'nullable|array',
            'options.*.name' => 'nullable|required_with:options.*.price|string',
            'options.*.price' => 'nullable|required_with:options.*.name|integer',
            'options.*.limit' =>'nullable|integer',
        ];
    }
}