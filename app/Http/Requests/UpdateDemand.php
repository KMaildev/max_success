<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDemand extends FormRequest
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
            'demand_status' => 'required',
            'office_id' => 'required',
            'countrie_id' => 'required|not_in:0',
            'overseas_agencie_id' => 'required',
            'male' => 'numeric',
            'female' => 'numeric',
        ];
    }
}
