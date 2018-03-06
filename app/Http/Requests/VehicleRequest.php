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
            'Rego_No' => 'Required',
            'VIN' => 'Required',
            'Make' => 'Required',
            'Model' => 'Required',
            'Year' => 'Required',
            'Capacity' => 'Required',
            'Fuel_Type' => 'Required',
            'Equipment' => 'Required',
            'License_Required' => 'Required'
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
