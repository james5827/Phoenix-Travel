<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TripRequest extends FormRequest
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
            'Trip_Id' => 'required',
            'Tour_No' => 'required',
            'Rego_No' => 'required',
            'Departure_Date' => 'required',
            'Max_Passengers' => 'required',
            'Standard_Amount' => 'required'
        ];
    }

    public function attributes()
    {
        return[
            'Trip_Id' => 'Trip Id',
            'Tour_No' => 'Tour Number',
            'Rego_No' => 'Registration Number',
            'Departure_Date' => 'Departure Date',
            'Max_Passengers' => 'Maximum Passengers',
            'Standard_Amount' => 'Standard Amount'
        ];
    }
}
