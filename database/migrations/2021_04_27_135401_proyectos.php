<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proyectos extends Migration
{
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table){
            $table->string('id_proyecto')->primary();
            $table->string('nombre_colaborador',50);
                $table->foreign('nombre_colaborador')->cascadeOnDelete()->references('nombre')->on('colaboradores');
            $table->string('apellidoPat',50);
                $table->foreign('apellidoPat')->cascadeOnDelete()->references('ape_pat')->on('colaboradores');
            $table->string('apellidoMat',50);
                $table->foreign('apellidoMat')->cascadeOnDelete()->references('ape_mat')->on('colaboradores');
            $table->integer('numJornadas');
            $table->double('costo_HoraExtra',8,2);
                $table->foreign('costo_HoraExtra')->cascadeOnDelete()->references('costoHoraExtra')->on('nomina');
            $table->double('numHrsExtra',8,2);
                $table->foreign('numHrsExtra')->cascadeOnDelete()->references('totalHrsExt')->on('nomina');
            $table->double('costoProy_Jornadas',8,2);
            $table->double('costoProy_HrsExt',8,2);
            $table->double('costo_totalProy',8,2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
