<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectoModel extends Model
{
    use HasFactory;

    protected $table = 'proyectos';

    protected $fillable = ['departamento', 'posicion', 'puesto', 'sueldo'];

}
