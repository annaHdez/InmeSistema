<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Puestos extends Migration
{
    public function up()
    {
        Schema::create('puestos', function (Blueprint $table) {
            $table->id('id');
            $table->string('puesto_trabajo',50)->index();
            $table->decimal('sueldo',8,2)->default(0)->index();
            $table->unsignedBigInteger('id_depto');
                $table->foreign('id_depto')->references('id')->on('departamentos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('puestos');
    }
}
