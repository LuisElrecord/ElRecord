<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->unsignedInteger('rtn')->nullable();
            $table->string('contacto')->nullable();
            $table->string('pais')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('direccion')->nullable();
            $table->string('correo');
            $table->unsignedInteger('telefono');
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
        Schema::dropIfExists('providers');
    }
}
