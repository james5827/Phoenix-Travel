<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
            'Name' => 'required',
            'Email' => 'required',
            'Password' => 'required',
            'Confirm_Password' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'Name' => 'Name',
            'Email' => 'Email',
            'Password' => 'Password',
            'Confirm_Password' => 'Confirm Password',
        ];
    }
}
