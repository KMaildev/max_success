<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePassport extends FormRequest
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
            'name' => 'required',
            // 'address' => 'required',
            // 'phone' => 'required',
            'agent_list_id' => 'required',

            'deposit' => 'numeric',

            'nrcCode' => 'required',
            'nrcName' => 'required',
            'nrcType' => 'required',
            'nrcFieldCode' => 'required',
        ];
    }
}
