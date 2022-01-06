<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_socio')->unsigned()->nullable();
            $table->foreign('id_socio')->references('id')->on('socios')->onDelete('cascade');
            $table->integer('id_libro')->unsigned()->nullable();
            $table->foreign('id_libro')->references('id')->on('libros')->onDelete('cascade');
            $table->date('fecha_prestamo');
            $table->date('fecha_devolucion');
        });
    }
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
