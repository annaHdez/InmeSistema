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
            $table->string('posicion_colab',20);
                $table->foreign('posicion_colab')->cascadeOnDelete()->references('posicion')->on('posiciones');
            $table->string('puesto_colab',50);
                $table->foreign('puesto_colab')->cascadeOnDelete()->references('puesto')->on('puestos');
            $table->double('sueldo_colab',8,2);
                $table->foreign('sueldo_colab')->cascadeOnDelete()->references('sueldo')->on('puestos');
            $table->double('SD_IMSS',8,2)->index();
            $table->double('SDI',8,2)->index();
            $table->boolean('estatus')->index();
            $table->date('fecha_baja')->nullable();
            $table->string('antiguedad',30);
            $table->double('costoHrsExtra',8,2)->index();
        });
    }
        public function down()
    {
            Schema::dropIfExists('colaboradores');
    }
}
