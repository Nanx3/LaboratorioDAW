<?php

namespace NensdeLlum\Http\Requests;

use NensdeLlum\Http\Requests\Request;

class SeleccionRedesSocialesRequest extends Request
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
            'URLPagina'=>'required',
            'Icono' => 'required | max:255',
            'Seleccion' => 'required'
        ];
    }
}