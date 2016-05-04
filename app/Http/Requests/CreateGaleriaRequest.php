<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateGaleriaRequest extends Request
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
            'name' => 'required|max:200',
        ];
    }

    public function sanitize()
    {
        $all = $this->all();
        $all['publish'] = $this->has('agree') ? 'Si' : 'No';
        return $all;
    }

}
