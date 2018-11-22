<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePlanToStayRequest extends FormRequest
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
            'name' => 'required|string',
            'description' => 'required|string',
            'price_per_day' => 'required|integer|min:1',
            'max_expected_number_of_people' => 'required|integer|min:1',
            'excess_charge_per_person' => 'required|integer',
            'min_number_of_nights' => 'required|integer|min:1',
            'max_number_of_nights' => 'required|integer|min:1',
            'checkin_from' => 'required',
            'checkin_to' => 'required|after:checkin_from',
            'checkout_from' => 'required',
            'checkout_to' => 'required|after:checkout_from',
			'day_ids' => 'required|array',
			'need_to_be_approved' => 'required|boolean',
			'preorder_deadline_id' => 'required',
			'preorder_period_id' => 'required',
        ];
    }

    public function onlyToCreatePlanToStay() {
        return $this->only([
            'name', 'description', 'price_per_day',
            'max_expected_number_of_people', 'excess_charge_per_person',
            'min_number_of_nights', 'max_number_of_nights', 'need_to_be_approved',
			'preorder_deadline_id', 'preorder_period_id',
        ]);
    }
}