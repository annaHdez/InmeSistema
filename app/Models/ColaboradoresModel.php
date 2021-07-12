<?php

namespace App\Models;
use App\Models\PuestosModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColaboradoresModel extends Model
{
    use HasFactory;

    protected $table = ['colaboradores'];

    protected $fillable = ['id','sexo','fechaNac','nombre','ape_paterno','ape_materno',
    'correo','grado_estudios','fecha_admision','id_posicion','puesto','sueldo_base',
    'SD_IMSS','SDI','turno','estatus','fecha_baja','antiguedad','costoHrsExtra'];

    public function getPosicion(){
        return $this->belongsTo('App\Models\PosicionesModel', 'id');
    }

    public function getPuesto(){
        return $this->belongsTo('App\Models\PuestosModel', 'puesto_trabajo','sueldo');
    }
}
