<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Establecimiento extends Model
{
    public function pacientes(){
        return $this->hasMany(Paciente::class);
    }
}
