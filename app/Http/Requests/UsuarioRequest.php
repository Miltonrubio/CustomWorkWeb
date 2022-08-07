<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
            'usuario' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'usuario.required' =>
                'El campo usuario no debe estar vacio es requerido',
            'telefono.required' =>
                'El campo telefono no debe estar vacio es requerido',
            'correo.required' =>
                'El campo correo no debe estar vacio es requerido',
        ];
    }
}
