<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('identidad')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->unsignedBigInteger('rtn')->nullable()->unique();
            $table->date('cumpleaños');
            $table->unsignedBigInteger('telefono')->nullable()->unique();
            $table->string('direccion')->nullable();
            $table->string('correo')->nullable()->unique();
            $table->unsignedBigInteger('puntos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
