<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class CreateApplyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::guard('users')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'plan_id' => 'required|integer',
            'by_day' => 'required|boolean',
            'by_hour' => 'required|boolean',
            'hours' => 'required_if:by_hour,true',
            'option_ids' => 'present|array',
            'option_ids.*' => 'integer',
            'option_counts' => 'present|array',
            'option_counts.*' => 'integer|min:1',
        ];
    }
}