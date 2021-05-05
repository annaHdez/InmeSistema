<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresasModel extends Model
{
    use HasFactory;

    protected $table = 'empresas';

    protected $fillable = ['id_empresa','nombre_empresa','direccion',
    'nombre_contacto','telefono_contacto'];
}
