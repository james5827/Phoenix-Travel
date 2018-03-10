<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
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
            'Rego_No' => 'required',
            'VIN' => 'required',
            'Make' => 'required',
            'Model' => 'required',
            'Year' => 'required',
            'Capacity' => 'required',
            'Fuel_Type' => 'required',
            'Equipment' => 'required',
            'License_Required' => 'required'
        ];
    }

    public function attributes()
    {
        return [
          'Rego_No' => 'Registration Number',
            'VIN' => 'Vehicle Identification Number',
            'Make' => 'Make',
            'Model' => 'Model',
            'Year' => 'Year',
            'Capacity'=> 'Capacity',
            'Equipment' => 'Equipment',
            'License_Required' => 'License Required'
        ];
    }
}
