<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColaboradoresModel extends Model
{
    use HasFactory;

    protected $table = ['colaboradores'];

    protected $fillable = ['id_colab','nombre','ape_pat','ape_mat','sexo','fechaNac',
    'educacion','fecha_admision','posicionC','puestoC','sueldoC',
    'SD_IMSS','SDI','estatus','fecha_baja','antiguedad'];

    /*public function Area(){
            return $this->belongsTo('App\Models\AreasModel', 'posicionC','puestoC','sueldoC');
    }*/
}
