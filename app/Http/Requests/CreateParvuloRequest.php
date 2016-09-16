<?php

namespace App\Http\Requests;

class CreateParvuloRequest extends Request
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
                    'rut' => 'required|max:12',
                    'full_name' => 'required|max:100',
                ];
            }
            case 'PUT': {
                return [
                    'rut' => 'Required|Max:50',
                    'full_name' => 'Required|Max:100',
                ];
            }
            default:
                break;
        }







    }
}
