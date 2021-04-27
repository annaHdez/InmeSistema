<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmpresasTable extends Migration
{
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table){
            $table->string('id_empresa',30)->primary();
            $table->string('nombre_empresa',100)->index();
            $table->string('nombre_contacto',100);
            $table->string('telefono_contacto',20);
        });
    }

    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
