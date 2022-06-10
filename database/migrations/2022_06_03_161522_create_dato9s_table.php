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
        Schema::create('dato9s', function (Blueprint $table) {
            $table->id();
            $table->string('NOMBRE')->nullable();
            $table->string('PROVINCIA')->nullable();
            $table->string('DISTRITO')->nullable();
            $table->string('CORREGIMIENTO')->nullable();
            $table->string('BARRIO')->nullable();
            $table->string('DIRECCION')->nullable();
            $table->string('TELEFONO FIJO')->nullable();
            $table->string('CELULAR')->nullable();
            $table->string('CORREO')->nullable();
            $table->string('ACTI_COMERCIAL')->nullable();
            $table->string('TIPO DOC')->nullable();
            $table->string('CEDULA')->nullable();
            $table->string('SECTOR')->nullable();
            $table->string('CALLE')->nullable();
            $table->string('NRO_CASA')->nullable();
            $table->string('CONDOMINIO')->nullable();
            $table->string('EDIFICIO')->nullable();
            $table->string('PISO')->nullable();
            $table->string('APTO')->nullable();
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
        Schema::dropIfExists('dato9s');
    }
};
