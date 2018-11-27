<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class CreateRequirementOfHostRequest extends FormRequest
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
            'zip' => 'required|zip',
            'prefecture_id' => 'required|integer',
            'address1' => 'required',
            'address1_ruby' => 'required',
            'address2' => 'required',
            'address2_ruby' => 'required',
            'address3' => 'required',
            'address3_ruby' => 'required',
            'dob_day' => 'required|integer|min:1|max:31',
            'dob_month' => 'required|integer|min:1|max:12',
            'dob_year' => [
                'required',
                'integer',
            ],
            'family_name' => 'required',
            'family_name_ruby' => 'required',
            'given_name' => 'required',
            'given_name_ruby' => 'required',
            'gender' => 'in:male,female',
            'tel' => 'required|tel',
        ];
    }

    public function onlyDataOfAddress() {
        return $this->only([
            'zip', 'prefecture_id',
            'address1', 'address1_ruby',
            'address2', 'address2_ruby',
            'address3', 'address3_ruby',
        ]);
    }

    public function onlyDataOfUser() {
        return $this->only([
            'dob_day', 'dob_month', 'dob_year',
            'family_name', 'family_name_ruby',
            'given_name', 'given_name_ruby',
            'gender', 'tel',
        ]);
    }
}