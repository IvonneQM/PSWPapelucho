<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateNoticiaRequest extends Request
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
            'title' => 'required|max:200',
            'content' => 'required|max:255',
        ];
    }

    public function sanitize()
    {
        $all = $this->all();

        $all['publish'] = $this->has('pub') ? 'Si' : 'No';

        return $all;
    }
}
