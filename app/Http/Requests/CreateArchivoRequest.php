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


    function sanitize_cadena($s)
    {
        $s = mb_convert_encoding($s, 'UTF-8','');
        $s = preg_replace("/á|à|â|ã|ª/","a",$s);
        $s = preg_replace("/Á|À|Â|Ã/","A",$s);
        $s = preg_replace("/é|è|ê/","e",$s);
        $s = preg_replace("/É|È|Ê/","E",$s);
        $s = preg_replace("/í|ì|î/","i",$s);
        $s = preg_replace("/Í|Ì|Î/","I",$s);
        $s = preg_replace("/ó|ò|ô|õ|º/","o",$s);
        $s = preg_replace("/Ó|Ò|Ô|Õ/","O",$s);
        $s = preg_replace("/ú|ù|û/","u",$s);
        $s = preg_replace("/Ú|Ù|Û/","U",$s);
        $s = str_replace(" ","_",$s);
        $s = str_replace("ñ","n",$s);
        $s = str_replace("Ñ","N",$s);

        $s = preg_replace('/[^a-zA-Z0-9_.-]/', '', $s);
        return $s;
    }

}
