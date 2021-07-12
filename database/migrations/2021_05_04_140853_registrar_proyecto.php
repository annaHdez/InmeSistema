<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RegistrarProyecto extends Migration
{
    public function up()
    {
        Schema::create('registrar_proyecto', function (Blueprint $table) {
            $table->string('id',10)->primary();
            $table->unsignedBigInteger('id_empresa');
                $table->foreign('id_empresa')->references('id')->on('empresas');
            $table->string('id_detProy',10);
                $table->foreign('id_detProy')->references('id')->on('detalleProyecto');
            $table->date('fecha_entrega');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registrar_proyecto');
    }
}
