<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiasFestModel extends Model
{
    use HasFactory;

    protected $table = 'diasFest';

    protected $fillable = ['id','fecha','celebracion'];
}
