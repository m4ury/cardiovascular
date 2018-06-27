<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{

  protected $fillable = [
    'nombre', 'tipo_familia', 'etapa_ciclo_vital', 'sector', 'direccion',
  ];

    public function pacientes(){
        return $this->hasMany('App\Paciente');
}
}
