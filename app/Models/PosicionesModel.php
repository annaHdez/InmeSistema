<?php

namespace App\Models;
use App\Models\DeptoModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosicionesModel extends Model
{
    use HasFactory;

    protected $table = ['posiciones'];

    protected $fillable = ['id_posicion','posicion','departamento'];

    public function getDepto(){
        return $this->belongsTo('App\Models\DeptosModel', 'departamento',
        'id_depto', 'nombre_depto');
    }
}
