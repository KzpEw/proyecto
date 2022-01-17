<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSociosTable extends Migration
{

    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('apellidos',100);
            $table->date('f_nacimiento',20);
            $table->string('email',50);
            $table->string('dni',10);
            $table->string('telefono',20);
        });
    }

    public function down()
    {
        Schema::dropIfExists('socios');
    }
}
