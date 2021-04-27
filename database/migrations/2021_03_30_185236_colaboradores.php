<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Colaboradores extends Migration
{
    public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table){
            $table->id('id_colab')->autoIncrement();
            $table->string('nombre',50)->index();
            $table->string('ape_pat',50)->index();
            $table->string('ape_mat',50)->index();
            $table->string('sexo',10);
            $table->date('fechaNac');
            $table->string('educacion',30);
            $table->date('fecha_admision');
            $table->string('posicionC',20);
                $table->foreign('posicionC')->cascadeOnDelete()->references('posicion')->on('areas');
            $table->string('puestoC',50);
                $table->foreign('puestoC')->cascadeOnDelete()->references('puesto')->on('areas');
            $table->double('sueldoC',8,2)->index();
                $table->foreign('sueldoC')->cascadeOnDelete()->references('sueldo')->on('areas');
            $table->double('SD_IMSS',8,2)->index();
            $table->double('SDI',8,2)->index();
            $table->boolean('estatus')->index();
            $table->date('fecha_baja')->nullable();
            $table->string('antiguedad',30);
        });
    }

        public function down()
    {
            Schema::dropIfExists('colaboradores');
    }
}
