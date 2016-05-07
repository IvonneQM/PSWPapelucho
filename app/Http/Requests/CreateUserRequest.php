<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request
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
            'rut' => 'Required|Unique:Users,Rut|Max:12',
            'full_name' => 'Required|Alpha|Max:50',
            'email' => 'Required|email|Max:100',
            'password' => 'Required|Max:30',
            'role' => 'Required|Between:5,9',
        ];
    }
}
