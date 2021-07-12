<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PuestosModel extends Model
{
    use HasFactory;

    protected $table = 'puestos';

    protected $fillable = ['id','puesto_trabajo','sueldo','id_depto'];

    public function getDeptos()
    {
        return $this->belongsTo('App\Models\DeptosModel', 'id');
    }
}
