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
            'rut' => 'required|unique:users,rut|max:12',
            'full_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required',
            'role' => 'max:12',
        ];
    }
}
