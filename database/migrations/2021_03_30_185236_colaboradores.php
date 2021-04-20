<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Colaboradores extends Migration
{
    public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table){
            $table->id('id_colab');
            $table->string('nombre',50);
            $table->string('apellido_paterno',50);
            $table->string('apellido_materno',50);
            $table->string('sexo',10);
            $table->date('fecha_nacimiento');
            $table->string('educación',30);
            $table->date('fecha_admisión');
            $table->string('pos_colab',20);
                $table->foreign('pos_colab')
                    ->references('posicion')->on('areas')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->string('puesto_colab',50);
                $table->foreign('puesto_colab')
                    ->references('puesto')->on('areas')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->double('sueldo_colab',8,2);
                $table->foreign('sueldo_colab')
                    ->references('sueldo')->on('areas')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->double('SD_IMSS',8,2);
            $table->double('SDI',8,2);
            $table->boolean('estatus');
            $table->date('fecha_baja')->nullable();
            $table->string('antiguedad',30);
        });
    }

        public function down()
    {
            Schema::dropIfExists('colaboradores');
    }
}
