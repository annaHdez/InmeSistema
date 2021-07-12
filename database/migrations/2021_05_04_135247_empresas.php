<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empresas extends Migration
{
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table){
            $table->id();
            $table->string('nomEmpresa',100);
            $table->string('calle',50);
            $table->string('numero',50);
            $table->string('colonia',50);
            $table->string('nombre_contacto',50);
            $table->string('apePat_contacto',50);
            $table->string('apeMat_contacto',50);
            $table->string('telefono_contacto',10);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
