<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiglasModel extends Model
{
    use HasFactory;

    protected $table = 'siglas';

    protected $fillable = ['id','descripcion'];
}
