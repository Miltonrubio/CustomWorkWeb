<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
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
            'titulo' => 'required',
            'empresa' => 'required',
            'paga' => 'required',
            'vacante' => 'required',
            'telefono' => 'required',
            'descripcion' => 'required',
            'descripcion1' => 'required',
            'descripcion2' => 'required',
            'descripcion3' => 'required',
            'descripcion4' => 'required',
            'descripcion5' => 'required',
            'descripcion6' => 'required',
            'descripcion7' => 'required',

            'email' => 'required',
            'usuario' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'titulo.required' =>
                'El campo titulo no debe estar vacio es requerido',
            'empresa.required' =>
                'El campo empresa no debe estar vacio es requerido',
            'paga.required' => 'El campo paga no debe estar vacio es requerido',
            'vacante.required' =>
                'El campo vacante no debe estar vacio es requerido',
            'telefono.required' =>
                'El campo telefono no debe estar vacio es requerido',
            'descripcion.required' =>
                'El campo descripcion no debe estar vacio es requerido',
            'descripcion1.required' =>
                'El campo descripcion no debe estar vacio es requerido',
            'descripcion2.required' =>
                'El campo descripcion no debe estar vacio es requerido',
            'descripcion3.required' =>
                'El campo descripcion no debe estar vacio es requerido',
            'descripcion4.required' =>
                'El campo descripcion no debe estar vacio es requerido',
            'descripcion5.required' =>
                'El campo descripcion no debe estar vacio es requerido',
            'descripcion6.required' =>
                'El campo descripcion no debe estar vacio es requerido',
            'descripcion7.required' =>
                'El campo descripcion  no debe estar vacio es requerido',

            'email.required' =>
                'El campo email no debe estar vacio es requerido',

            'usuario.required' =>
                'El campo usuario no debe estar vacio es requerido',
        ];
    }
}
