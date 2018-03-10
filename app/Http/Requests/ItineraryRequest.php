<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItineraryRequest extends FormRequest
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
            'Tour_No' => 'required',
            'Day_No' => 'required',
            'Hotel_Booking_No' => 'required',
            'Activities' => 'required',
            'Meals' => 'required'
        ];
    }

    public function attributes()
    {
        return[
            'Tour_No' => 'Tour Number',
            'Day_No' => 'Day Number',
            'Hotel_Booking_No' => 'Hotel Booking Number',
            'Activities' => 'Activities',
            'Meals' => 'Meals'
        ];
    }
}
