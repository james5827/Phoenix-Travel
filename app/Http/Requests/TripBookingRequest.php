<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TripBookingRequest extends FormRequest
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
            'Trip_Booking_No' => 'required',
            'Trip_Id' => 'required',
            'Primary_Customer' => 'required',
            'Booking_Date' => 'required',
            'Deposit_Amount' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'Trip_Booking_No' => 'Trip Booking Number',
            'Trip_Id' => 'Trip Id',
            'Primary_Customer' => 'Primary Customer',
            'Booking_Date' => 'Booking Date',
            'Deposit_Amount' => 'Deposit'
        ];
    }
}
