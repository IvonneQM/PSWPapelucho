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
        switch ($this->method()) {
            case 'POST': {
                return [
                    'rut' => 'Required|Unique:users,Rut|Max:12',
                    'full_name' => 'Required|Max:50',
                    'email' => 'Required|email|Max:100',
                    'password' => 'Required|Max:30',
                    'role' => 'Required|Between:5,9',

                ];
            }
            case 'PUT': {
                return [
                    'full_name' => 'Required|Max:50',
                    'email' => 'Required|email|Max:100',
                ];
            }
            default:
                break;
        }
    }
}