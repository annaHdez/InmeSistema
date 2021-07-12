<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Siglas extends Migration
{
    public function up()
    {
        Schema::create('siglas', function (Blueprint $table) {
            $table->string('id',10)->primary();
            $table->string('descripcion',50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('siglas');
    }
}
