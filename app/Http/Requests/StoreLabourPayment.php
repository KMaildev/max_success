<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLabourPayment extends FormRequest
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
            // 'passport_id' => 'required',
            // 'deposit_date' => 'required',
            // 'deposit_amount' => 'required|numeric',
            // 'received_amount' => 'required|numeric',
        ];
    }
}
