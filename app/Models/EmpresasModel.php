<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresasModel extends Model
{
    use HasFactory;

    protected $table = 'empresas';

    protected $fillable = ['id','nomEmpresa','calle', 'numero',
    'colonia','nombre_contacto','apePat_contacto',
    'apeMat_contacto','telefono_contacto'];
}
