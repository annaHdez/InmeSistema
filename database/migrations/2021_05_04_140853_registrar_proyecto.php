<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RegistrarProyecto extends Migration
{
    public function up()
    {
        Schema::create('registrar_proyecto', function (Blueprint $table) {
            $table->string('id_proyecto',20)->primary();
            $table->string('idEmpresa',30);
                $table->foreign('idEmpresa')->cascadeOnDelete()->references('id_empresa')->on('empresas');
            $table->string('nombre_Empresa',100);
                $table->foreign('nombre_Empresa')->cascadeOnDelete()->references('nombre_empresa')->on('empresas');
            $table->string('descripcion',255);
            $table->integer('cantidad');
            $table->double('costo_venta',8,2);
            $table->date('fecha_entrega');
        });
    }

    public function down()
    {
        Schema::dropIfExists('registrar_proyecto');
    }
}
