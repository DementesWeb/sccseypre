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
        Schema::create('dato43s', function (Blueprint $table) {
            $table->id();
            $table->string('PLACA')->nullable();
            $table->string('CUPO')->nullable();
            $table->string('MARCA')->nullable();
            $table->string('MODELO')->nullable();
            $table->string('TIPO_VEHICULO')->nullable();
            $table->string('ANO_VEHICULO')->nullable();
            $table->string('MOTOR')->nullable();
            $table->string('TIPO_CAPACIDAD')->nullable();
            $table->string('CAPACIDAD')->nullable();
            $table->string('COLOR')->nullable();
            $table->string('TIPO_COMBUSTIBLE')->nullable();
            $table->string('TIPO_DOC_PROPIETARIO')->nullable();
            $table->string('CIP_PROPIETARIO')->nullable();
            $table->string('NOMBRE_COMPLETO')->nullable();
            $table->string('SEXO')->nullable();
            $table->string('DIRECCION')->nullable();
            $table->string('TEL1')->nullable();
            $table->string('TEL2')->nullable();
            $table->string('TEL3')->nullable();
            $table->string('TEL4')->nullable();
            $table->string('ESTADO')->nullable();
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
        Schema::dropIfExists('dato43s');
    }
};
