<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // static $rules = [
    //     'usuario' => 'required',
    //     'empresa_id' => 'required',
    //     'titulo' => 'required',
    //     'empresa' => 'required',
    // ];

    protected $fillable = ['usuario', 'telefono', 'correo', 'empresa_id'];

    // public function empresa()
    // {
    //     return $this->belongsTo('App\Models\Empresa');
    // }

    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'id', 'empresa_id');
    }
}
