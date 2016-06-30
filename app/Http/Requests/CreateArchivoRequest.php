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
        $this->sanitize();

        $mimes = [
            'galerias-jardines' => 'mimes:jpeg,png,bmp',
            'niveles'  => 'mimes:application/doc,application/docx,application/pdf',
            'parvulos' => '',
            'general' => ''
        ];

        $rules = [
            'galerias' => 'RequiredIf:type,galerias-jardines',
            'jardines' => 'RequiredIf:type,galerias-jardines',
            'niveles'  => 'RequiredIf:type,niveles',
            'parvulos' => 'RequiredIf:type,parvulos',
        ];

        foreach($this->file('file') as $i => $file){
            $rules['file-'.$i] = $mimes[$this->input('type')];
        }

        return $rules;
    }


    public function sanitize()
    {
        $all = $this->all();
        if( count($all['file']) > 0 ) foreach($all['file'] as $i => $file)
        {
            $all['file-'.$i] = $file;
        }
        return $all;
    }




}
