<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Colaboradores extends Migration
{
    public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table){
            $table->string('id',10)->primary();
            $table->string('sexo',10);
            $table->date('fechaNac');
            $table->string('nombre',50);
            $table->string('ape_paterno',50);
            $table->string('ape_materno',50);
            $table->string('correo',50)->nullable();
            $table->string('grado_estudios',30);
            $table->date('fecha_admision');
            $table->unsignedBigInteger('id_posicion');
                $table->foreign('id_posicion')->references('id')->on('posiciones');
            $table->string('puesto',50);
                $table->foreign('puesto')->references('puesto_trabajo')->on('puestos');
            $table->decimal('sueldo_base',13,2);
                $table->foreign('sueldo_base')->references('sueldo')->on('puestos');
            $table->decimal('SD_IMSS',13,2)->index();
            $table->decimal('SDI',13,2)->index();
            $table->string('turno',10);
            $table->boolean('estatus')->index();
            $table->date('fecha_baja')->nullable();
            $table->string('antiguedad',30);
            $table->double('costoHrsExtra',8,2)->index()->nullable();
            $table->timestamps();
        });
    }
        public function down()
    {
            Schema::dropIfExists('colaboradores');
    }
}
