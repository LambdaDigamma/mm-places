<?php

namespace LambdaDigamma\MMPlaces\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGeneralPlace extends FormRequest 
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
            'name' => 'required|string|min:3|max:255',
            'street_name' => 'nullable|string|min:2|max:255',
            'street_number' => 'nullable|string|min:1|max:10',
            'street_addition' => 'nullable|string|min:1|max:255',
            'postalcode' => 'nullable|string|min:4|max:5',
            'postaltown' => 'nullable|string|min:2|max:30',
            'lat' => 'nullable|numeric',
            'lng' => 'nullable|numeric',
        ];
    }
}