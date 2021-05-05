<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Departamentos extends Migration
{
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->string('id_depto',10)->primary();
            $table->string('nombre_depto',50)->index();
        });
    }

    public function down()
    {
        Schema::dropIfExists('departamentos');
    }
}
