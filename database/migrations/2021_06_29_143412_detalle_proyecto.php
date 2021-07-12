<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetalleProyecto extends Migration
{
    public function up()
    {
        Schema::create('detalleProyecto', function (Blueprint $table) {
            $table->string('id',10)->primary();
            $table->integer('cantidad');
            $table->string('descripcion',200);
            $table->decimal('costo_produccion',13,2)->default(0);
            $table->string('tiempo_produccionXunidad',50);
            $table->decimal('costo_venta',13,2)->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detalleProyecto');
    }
}
