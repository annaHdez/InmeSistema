<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posiciones extends Migration
{
    public function up()
    {
        Schema::create('posiciones', function (Blueprint $table) {
            $table->integer('id_posicion')->primary();
            $table->string('posicion',20)->index();
            $table->string('departamento',50);
                $table->foreign('departamento')->cascadeOnDelete()
                ->references('nombre_depto')->on('departamentos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('posiciones');
    }
}
