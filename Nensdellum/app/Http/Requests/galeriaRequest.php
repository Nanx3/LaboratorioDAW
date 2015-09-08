<?php

namespace NensdeLlum\Http\Requests;

use NensdeLlum\Http\Requests\Request;
use NensdeLlum\Contenido;

class galeriaRequest extends Request
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
            'Titulo'=>'required|max:255|min:3',
            'Descripcion'=>'max:180',
            'URLImagen' => 'required|URL',
        ];
    }
}
