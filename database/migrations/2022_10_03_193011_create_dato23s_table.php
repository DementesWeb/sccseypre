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
        Schema::create('dato23s', function (Blueprint $table) {
            $table->id();
            $table->string('NOMBRE')->nullable();
            $table->string('APELLIDO')->nullable();
            $table->string('CEDULA')->nullable();
            $table->string('CARGO_EN_FUNCION')->nullable();
            $table->string('LUGAR_DONDE_LABORA')->nullable();
            $table->string('SUELDO_B')->nullable();
            $table->string('GASTOS_B')->nullable();
            $table->string('SOBRESUELDO_B')->nullable();
            $table->string('F_DE_INICIO')->nullable();
            $table->string('OBJETO_DE_GASTO')->nullable();
            $table->string('CONDICION_DEL_FUNCIONARIO')->nullable();
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
        Schema::dropIfExists('dato23s');
    }
};
