<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAgentList extends FormRequest
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
        $id = $this->route('agent_list');
        return [
            'agent_code' => 'required|unique:agent_lists,agent_code,' . $id,
            'name' => 'required',
            'region_id' => 'required',
            'township_id' => 'required',

            'photo' => 'mimes:png,jpg,jpeg|max:2048',
            'nrc_front' => 'mimes:png,jpg,jpeg|max:2048',
            'nrc_back' => 'mimes:png,jpg,jpeg|max:2048',
        ];
    }
}
