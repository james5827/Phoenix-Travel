<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'Customer_Id' => 'required',
            'First_Name' => 'required',
            'Middle_Initial' => 'required',
            'Last_Name' => 'required',
            'Street_No' => 'required',
            'Street_Name' => 'required',
            'Suburb' => 'required',
            'Postcode' => 'required',
            'Email' => 'required',
            'Password' => 'required|confirmed',
            'Phone' => 'required',
            'AuthCustomer' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'Customer_Id' => 'Customer Id',
            'First_Name' => 'First Name',
            'Middle_Initial' => 'Middle Initial',
            'Last_Name' => 'Surname',
            'Street_No' => 'Street Number',
            'Street_Name' => 'Street Name',
            'Suburb' => 'Suburb',
            'Postcode' => 'Postcode',
            'Email' => 'Email',
            'Password' => 'Password',
            'Phone' => 'Phone Number',
            'AuthCustomer' => 'Authorised'
        ];
    }
}
