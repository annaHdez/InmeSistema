<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->integer('id_posicion')->primary();
            $table->string('posicion',20)->index();
            $table->string('departamento',50);
            $table->string('puesto',50)->index();
            $table->double('sueldo',8,2)->index();
        });
    }

    public function down()
    {
        Schema::dropIfExists('areas');
    }
}
