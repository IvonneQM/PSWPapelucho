<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateArchivoRequest extends Request
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
            'type'      => 'Required',
            'galerias'  => 'RequiredIf:type,galerias-jardines',
            'jardines' =>  'RequiredIf:type,galerias-jardines',
            'niveles' => 'RequiredIf:type,niveles',
            'parvulos' => 'RequiredIf:type,parvulos'
        ];
    }
}
