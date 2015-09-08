<?php

namespace NensdeLlum\Http\Requests;

use NensdeLlum\Http\Requests\Request;

class URLImagenesInicioRequest2 extends Request
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
            //
            'URLImagen2'=>'required|URL'
        ];
    }
}
