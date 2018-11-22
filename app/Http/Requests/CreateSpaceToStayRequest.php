<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSpaceToStayRequest extends FormRequest
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
            'rent_space_type_id' => 'required',
            'number_of_beds' => 'required|integer',
            'number_of_futons' => 'required|integer',
            'number_of_baths' => 'required|integer',
            'number_of_toilets' => 'required|integer',
            'rent_space_business_type_id' => 'required|integer',
            'business_license_image' => 'required|image',
        ];
    }

    public function onlyToCreateSpaceToStay() {
        return $this->only([
            'key_delivery_id',
			'name', 'about', 'capacity', 'floor_area',
			'about_amenity', 'about_food_drink','about_cleanup',
			'cancellation_policy', 'terms_of_use', 'rent_space_type_id',
            'number_of_beds', 'number_of_futons', 'number_of_baths', 'number_of_toilets',
            'rent_space_business_type_id',
        ]);
    }
}