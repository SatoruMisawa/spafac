<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFacilityRequest extends FormRequest
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
			'name' => 'required|string',
			'zip' => 'required|zip',
			'prefecture_id' => 'required|integer',
			'address1' => 'required|string',
			'address1_ruby' => 'required|string',
			'address2' => 'required|string',
			'address2_ruby' => 'required|string',
			'address3' => 'nullable|required_with:address3_ruby|string',
			'address3_ruby' => 'nullable|required_with:address3|string',
			'latitude' => 'required',
			'longitude' => 'required',
			'access' => 'required|string',
			'tel' => 'required|tel',
		];
    }
}