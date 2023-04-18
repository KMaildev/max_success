<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInterview extends FormRequest
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
            'interview_title' => 'required',
            'demand_id' => 'required|not_in:0',
            'interview_date' => 'required',
            'interview_male' => 'numeric',
            'interview_female' => 'numeric',
        ];
    }
}
