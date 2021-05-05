<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PuestosModel extends Model
{
    use HasFactory;

    protected $table = 'puestos';

    protected $fillable = ['id_puesto','puesto','sueldo','nom_posicion','depto'];

    public function getPosiciones()
    {
        return $this->belongsTo('App\Models\PosicionesModel','nom_posicion','id_posicion',
    'posicion', 'departamento');
    }

    public function getDeptos()
    {
        return $this->belongsTo('App\Models\DeptosModel', 'depto', 'id',
        '', 'nombre_depto');
    }
}
