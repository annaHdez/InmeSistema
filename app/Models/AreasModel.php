<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreasModel extends Model
{
    use HasFactory;

    protected $table = 'areas';

    protected $fillable = ['id_posicion','posicion','departamento','puesto','sueldo'];
}
