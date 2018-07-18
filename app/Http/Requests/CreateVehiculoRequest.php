<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateVehiculoRequest extends Request
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
                    'patente' => 'required|max:12|unique:vehiculos',
					'marca' => 'required|max:100',
					'modelo' => 'required|max:100',

                ];
            }
            case 'PUT': {
                return [
                    'patente' => 'Required|Max:12',
					'marca' => 'Required|Max:100',
					'modelo' => 'required|max:100',
                ];
            }
            default:
                break;
        }
    }
}
