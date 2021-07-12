<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InsertPosiciones extends Migration
{
    public function up()
    {
        DB::statement("INSERT INTO posiciones(posicion) VALUES('Administrativo'), ('Operativo')");

    }

    public function down()
    {
        //Borramos los registros
        DB::statement("TRUNCATE posiciones");
    }
}
