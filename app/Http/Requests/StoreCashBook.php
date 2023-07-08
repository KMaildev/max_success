<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCashBook extends FormRequest
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
            'cash_book_date' => 'required',
            'reference' => 'required',
            'income' => 'numeric',
            'expense' => 'numeric',
            'tax' => 'required',
            'chartof_account_id' => 'required',
            'bank_cash_id' => 'required',
        ];
    }
}
