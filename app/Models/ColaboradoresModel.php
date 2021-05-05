<?php

namespace App\Models;
use App\Models\PuestosModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColaboradoresModel extends Model
{
    use HasFactory;

    protected $table = ['colaboradores'];

    protected $fillable = ['id_colab','nombre','ape_pat','ape_mat','sexo','fechaNac',
    'educacion','fecha_admision','posicion_colab','puesto_colab','sueldo_colab',
    'SD_IMSS','SDI','estatus','fecha_baja','antiguedad'];

    public function getPosicion(){
        return $this->belongsTo('App\Models\PosicionesModel', 'posicion');
    }

    public function getPuesto(){
        return $this->belongsTo('App\Models\PuestosModel', 'puesto','sueldo');
    }
}
