<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proyectos extends Migration
{
    public function up()
    {
    Schema::create('proyectos', function (Blueprint $table){
        $table->string('id_project',20);
            $table->foreign('id_project')->cascadeOnDelete()->references('id_proyecto')->on('registrar_proyecto');
        $table->string('nombre_colaborador',50);
            $table->foreign('nombre_colaborador')->cascadeOnDelete()->references('nombre')->on('colaboradores');
        $table->string('apellidoPat',50);
            $table->foreign('apellidoPat')->cascadeOnDelete()->references('ape_pat')->on('colaboradores');
        $table->string('apellidoMat',50);
            $table->foreign('apellidoMat')->cascadeOnDelete()->references('ape_mat')->on('colaboradores');
        $table->integer('numJornadas')->index();
        $table->double('numHrsExtra',8,2)->index();
        $table->double('costo_hrsExtra',8,2);
            $table->foreign('costo_hrsExtra')->cascadeOnDelete()->references('costoHrsExtra')->on('colaboradores');
        $table->double('costoProy_Jornadas',8,2);
        $table->double('costoProy_HrsExt',8,2);
        $table->double('costoMateriales',8,2);
        $table->double('costo_totalProy',8,2);
    });
}
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
