<?php

namespace NensdeLlum\Http\Requests;

use NensdeLlum\Http\Requests\Request;

class FilosofiaRequest extends Request
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
            'Descripcion'=>'required|min:3',
            'Icono'=>'required|max:255'
        ];
    }
}
