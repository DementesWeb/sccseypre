<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dato37s', function (Blueprint $table) {
            $table->id();
            $table->string('CEDULA')->nullable();
            $table->string('PRIMER_NOMBRE')->nullable();
            $table->string('SEGUNDO_NOMBRE')->nullable();
            $table->string('APELLIDO_PATERNO')->nullable();
            $table->string('APELLIDO_MATERNO')->nullable();
            $table->string('FECHA_NACIMIENTO')->nullable();
            $table->string('SEXO')->nullable();
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
        Schema::dropIfExists('dato37s');
    }
};
