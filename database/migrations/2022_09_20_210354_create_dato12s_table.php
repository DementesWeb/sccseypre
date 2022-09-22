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
        Schema::create('dato12s', function (Blueprint $table) {
            $table->id();
            $table->string('CEDULA')->nullable();
            $table->string('NOMBRE')->nullable();
            $table->string('FECHA_DE_INGRESO')->nullable();
            $table->string('POSICION')->nullable();
            $table->string('SALARIO')->nullable();
            $table->string('GASTOS')->nullable();
            $table->string('TOTAL')->nullable();
            $table->string('EMPLEADO')->nullable();
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
        Schema::dropIfExists('dato12s');
    }
};
