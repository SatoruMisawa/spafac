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
            'key_delivery_id' => 'required',
            'name' => 'required|string',
            'about' => 'required|string',
            'capacity' => 'required|numeric|min:1',
			'floor_area' => 'required|numeric|min:1',
            'about_amenity' => 'required|string',
            'about_food_drink' => 'required|string',
            'about_cleanup' => 'required|string',
            'cancellation_policy' => 'required|string',
            'terms_of_use' => 'required|string',
            'space_usage_ids' => 'required|array',
            'amenity_ids' => 'required|array',
		];
    }
}