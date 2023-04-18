<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContracts extends FormRequest
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
            'demand_id' => 'required|not_in:0',
            'contract_date' => 'required',
            'contract_male' => 'numeric',
            'contract_female' => 'numeric',
        ];
    }
}
