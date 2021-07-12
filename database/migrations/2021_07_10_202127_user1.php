<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User1 extends Migration
{
    public function up()
    {
        $password = Hash::make('12345678');
        DB::statement("INSERT INTO users(email,password) VALUES('ana.ferhero@gmail.com','".$password."')");

    }

    public function down()
    {
        //Borramos los registros
        DB::statement("TRUNCATE users");
    }
}
