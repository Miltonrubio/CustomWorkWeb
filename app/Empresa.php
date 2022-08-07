<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    static $rules = [
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
    protected $fillable = [
        'titulo',
        'empresa',
        'paga',
        'vacante', #
        'telefono', #
        'descripcion',
        'descripcion1',
        'descripcion2',
        'descripcion3',
        'descripcion4',
        'descripcion5',
        'descripcion6',
        'descripcion7',

        'email',
        'usuario',
    ];

    // public function usuarios()
    // {
    //     return $this->hasMany('App\Models\Empresa');
    // }
    public function usuarios()
    {
        return $this->hasMany('App\Models\Usuario', 'empresa_id', 'id');
    }
}
