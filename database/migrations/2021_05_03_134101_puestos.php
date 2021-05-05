<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Puestos extends Migration
{
    public function up()
    {
        Schema::create('puestos', function (Blueprint $table) {
            $table->id('id_puesto')->autoIncrement();
            $table->string('puesto',50)->index();
            $table->double('sueldo',8,2)->index();
            $table->string('nom_posicion',20);
                $table->foreign('nom_posicion')->cascadeOnDelete()
                ->references('posicion')->on('posiciones');
            $table->string('depto',50);
                $table->foreign('depto')->cascadeOnDelete()
                ->references('nombre_depto')->on('departamentos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('puestos');
    }
}
