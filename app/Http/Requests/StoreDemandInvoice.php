<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDemandInvoice extends FormRequest
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
            'submit_date' => 'required',
            'overseas_agencie_id' => 'required',
            'demand_id' => 'required',
            'amount' => 'numeric',
            'total_labour' => 'numeric',
        ];
    }
}
