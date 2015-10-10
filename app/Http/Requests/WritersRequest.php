<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class WritersRequest extends Request
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
            
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'program' => 'required',
            'email' => 'required|email| unique:writers',
            'password' => 'required|min:6',
            'repassword' => 'required|same:password',

        ];
    }
}
