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
        Schema::create('dato21s', function (Blueprint $table) {
            $table->id();
            $table->string('CONDICION_DEL_NOMBRAMIENTO')->nullable();
            $table->string('APELLIDO_PATERNO')->nullable();
            $table->string('APELLIDO_MATERNO')->nullable();
            $table->string('PRIMER_NOMBRE')->nullable();
            $table->string('SEGUNDO_NOMBRE')->nullable();
            $table->string('CEDULA')->nullable();
            $table->string('CARGO_REAL')->nullable();
            $table->string('GASTO_DE_REPRESENTACIÓN')->nullable();
            $table->string('SALARIO_SEGUN_PLANILLA')->nullable();
            $table->string('AREA')->nullable();
            $table->string('FECHA_DE_INICIO')->nullable();
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
        Schema::dropIfExists('dato21s');
    }
};
