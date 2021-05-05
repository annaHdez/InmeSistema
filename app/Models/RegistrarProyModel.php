<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrarProyModel extends Model
{
    use HasFactory;

    protected $table = 'registrar_proyecto';

    protected $fillable = ['id_proyecto','idEmpresa','nombre_Empresa','descripcion',
    'cantidad','costo_venta','fecha_entrega'];

    public function getEmpresa(){
        return $this->belongsTo('App\Models\EmpresasModel', 'id_empresa','nombre_empresa');
    }
}
