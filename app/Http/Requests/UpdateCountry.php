<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCountry extends FormRequest
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
            'country_name' => 'required',
            'currency_format' => 'required',
            'standard_cost' => 'required|numeric',
            'standard_cost_mmk' => 'required|numeric',
            'exchange_rate' => 'required|numeric',
            'total_amount_mmk' => 'required|numeric',
        ];
    }
}
