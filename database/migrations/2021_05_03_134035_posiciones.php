<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posiciones extends Migration
{
    public function up()
    {
        Schema::create('posiciones', function (Blueprint $table) {
            $table->id();
            $table->string('posicion',20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posiciones');
    }
}
