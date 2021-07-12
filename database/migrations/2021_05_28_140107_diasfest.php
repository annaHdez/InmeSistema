<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Diasfest extends Migration
{
    public function up()
    {
        Schema::create('diasFest', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('celebracion',50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('diasFest');
    }
}
