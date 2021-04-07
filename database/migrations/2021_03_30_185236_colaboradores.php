<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Colaboradores extends Migration
{
        public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table){
            $table->id();
            $table->string('nombre', 50);
            $table->string('apellido_paterno', 50);
            $table->string('apellido_materno', 50);
            $table->string('sexo', 10);
            $table->date('fecha_nacimiento');
            $table->string('educación');
            $table->date('fecha_admisión');
            $table->string('posicion');
            $table->foreign('posicion')->references('posicion')->on('areas');
            $table->string('puesto');
            $table->float('sueldo');
            $table->float('SD_IMSS');
            $table->float('SDI');
            $table->date('fecha_baja');
            $table->date_diff($fecha_baja() - $fecha_admision()): 'antiguedad';
            date_diff(DateTimeInterface $f [, bool $absolute , DateTimeInterface $datetime1 ]): DateInterval
        });
    }

        public function down()
    {

    }
}
