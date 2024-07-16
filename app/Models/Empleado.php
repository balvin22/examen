<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    public function departamento(){
        return $this->belongsTo(Departamento::class);
    }
    public function hijos(){
        return $this->hasMany(Hijo::class);
    }
    public function habilidades(){
        return $this->belongsToMany(Habilidad::class);
    }
}
