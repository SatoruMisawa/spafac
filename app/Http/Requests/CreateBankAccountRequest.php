<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBankAccountRequest extends FormRequest
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
            'bank_name' => 'required|string',
            'bank_code' => 'required|string',
            'branch_name' => 'required|string',
            'branch_code' => 'required|string',
            'account_number' => 'required|string',
            'account_holder' => 'required|string',
        ];
    }
}