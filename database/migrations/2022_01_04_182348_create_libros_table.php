<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',100);
            $table->string('editorial',100);
            $table->string('autor',50);
        });
    }
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
