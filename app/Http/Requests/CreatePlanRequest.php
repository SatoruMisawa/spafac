<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePlanRequest extends FormRequest
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
			'by_hour' => 'required_without:by_day|boolean',
			'price_per_hour' => 'nullable|required_with:by_hour|integer|min:1',
			'by_day' => 'required_without:by_hour|boolean',
			'price_per_day' => 'nullable|required_with:by_day|integer|min:1',
			'day_ids' => 'required|array',
			'hour_from' => 'required|array',
			'hour_to' => 'required|array',
			'need_to_be_approved' => 'required|boolean',
			'preorder_deadline_id' => 'required',
			'preorder_period_id' => 'required',
			'period_from' => 'nullable|date',
			'period_to' => 'nullable|date|after:period_from',
		];
    }
}