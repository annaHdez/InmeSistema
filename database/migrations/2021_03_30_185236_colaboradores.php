<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use SebastianBergmann\Type\NullType;

class Colaboradores extends Migration
{
        public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table){
            $table->integerIncrements('idColab');
            $table->string('nombre', 50);
            $table->string('apellido_paterno', 50);
            $table->string('apellido_materno', 50);
            $table->string('sexo', 10);
            $table->date('fecha_nacimiento');
            $table->string('educación');
            $table->dateTime('fecha_admisión');
            $table->string('posicionColab',50);
                $table->foreign('posicionColab')->references('posicion')->on('areas');
            $table->string('puestoColab',50);
                $table->foreign('puestoColab')->references('puesto')->on('areas');
            $table->float('sueldoColab');
                $table->foreign('sueldoColab')->references('sueldo')->on('areas');
            $table->float('SD_IMSS');
            $table->float('SDI');
            $table->boolean('estatus');
            $table->dateTime('fecha_baja', Null);
            $table->string('antiguedad', 30);
        });
    }

        public function down()
    {
            Schema::dropIfExists('colaboradores');
    }
}
