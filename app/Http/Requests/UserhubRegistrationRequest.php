<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserhubRegistrationRequest extends Request
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
            //Validation rules
            'name' =>'required|min:3',
            'program' => 'required',
            'email' => 'required|email|unique:userhubs',
            'district' => 'required'
        ];
    }
}
