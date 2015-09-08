<?php

namespace NensdeLlum\Http\Requests;

use NensdeLlum\Http\Requests\Request;

class SeleccionContenidoRequest extends Request
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
            'Titulo'=>'required|min:3|max:255',
            'Descripcion'=>'required|min:3',
            'URLImagen'=>'required|URL',
            'Seleccion'=>'required'
        ];
    }
}