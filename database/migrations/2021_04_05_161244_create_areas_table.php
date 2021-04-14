<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id('id_posicion');
            $table->string('posicion', 20);
            $table->string('departamento', 50);
            $table->string('puesto', 50);
            $table->float('sueldo');
        });
    }

    public function down()
    {
        Schema::dropIfExists('areas');
    }
}
