<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['rut', 'nombres', 'apellidos', 'direccion', 'telefono', 'sector', 'sexo', 'edad', 'fecha_nacimiento'];

    public function familia(){
        return $this->belongsTo('App\Familia');
    }

    public function controls()
    {
        return $this->hasMany(Control::class);
    }
}
