<?php

namespace App\Http\Requests;

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
            'galerias-jardines' => 'mimes:jpeg,png,bmp,png ',
            'niveles'  => 'mimes:application/doc,application/docx,application/pdf',
            'parvulos' => '',
            'general' => ''
        ];

        $rules = [
            'galerias' => 'RequiredIf:type,galerias-jardines',
            'jardines' => 'RequiredIf:type,galerias-jardines',
            'niveles'  => 'RequiredIf:type,niveles',
            'parvulos' => 'RequiredIf:type,parvulos',
            'fileName' => 'Unique:Archivo|max:300',
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


    function sanitize_cadena($string)
    {
        $string = trim($string);

        $string = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $string
        );

        $string = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $string
        );

        $string = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $string
        );

        $string = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $string
        );

        $string = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $string
        );

        $string = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C',),
            $string
        );
        return $string;
    }

}
