<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    protected $fillable = [];


    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }
}
