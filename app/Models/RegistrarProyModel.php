<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrarProyModel extends Model
{
    use HasFactory;

    protected $table = 'registrar_proyecto';

    protected $fillable = ['departamento', 'posicion', 'puesto', 'sueldo'];

}
