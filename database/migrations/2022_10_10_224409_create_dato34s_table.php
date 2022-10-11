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
        Schema::create('dato34s', function (Blueprint $table) {
            $table->id();
            $table->string('FUNCIONARIO')->nullable();
            $table->string('NUMERO_EMPLEADO')->nullable();
            $table->string('CEDULA')->nullable();
            $table->string('UBICACION')->nullable();
            $table->string('FECHA_DE_INGRESO')->nullable();
            $table->string('OBJETO')->nullable();
            $table->string('POSICION')->nullable();
            $table->string('ESTADO')->nullable();
            $table->string('SALARIO')->nullable();
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
        Schema::dropIfExists('dato34s');
    }
};
