<?php

namespace NensdeLlum\Http\Requests;

use NensdeLlum\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class CambiarContrasenaRequest extends Request
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
       'contrasenaActual' => 'required|min:6|current_password|required',
       'contrasena' => 'confirmed|min:6|required',
       'contrasena_confirmation' => 'required'
        ];
    }
    public function sanitize()
    {
       return $this->only('password');
    }

}