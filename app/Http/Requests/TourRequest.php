<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
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
            'Tour_no' => 'required',
            'Tour_Name'  => 'required',
            'Description'  => 'required',
            'Duration'  => 'required',
            'Route_Map'  => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'Tour_no' => 'Tour Number',
            'Tour_Name'  => 'Tour Name',
            'Description'  => 'Description',
            'Duration'  => 'Duration',
            'Route_Map'  => 'Route Map'
        ];
    }
}
