<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSpaceRequest extends FormRequest
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
			'space_usage_ids' => 'required|array',
			'capacity' => 'required|numeric|min:1',
			'floor_area' => 'required|numeric|min:1',
			'key_delivery_id' => 'required',
		];
    }
}