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
            'invoice_no' => 'required|unique:demand_invoices,invoice_no',
            'submit_date' => 'required',
            'overseas_agencie_id' => 'required',
            'demand_id' => 'required',
            'amount' => 'numeric|min:0|not_in:0',
            'total_labour' => 'numeric',
        ];
    }
}
