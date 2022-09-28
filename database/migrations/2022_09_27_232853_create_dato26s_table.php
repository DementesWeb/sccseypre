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
        Schema::create('dato26s', function (Blueprint $table) {
            $table->id();
            $table->string('CEDULA')->nullable();
            $table->string('FUNCIONARIO')->nullable();
            $table->string('FECHA_NACIMIENTO')->nullable();
            $table->string('FECHA_INGRESO')->nullable();
            $table->string('CARGO_FUNCION')->nullable();
            $table->string('SALARIO')->nullable();
            $table->string('GASTO_DE_REP')->nullable();
            $table->string('SOBRE_SUELDO_ANTIGUEDAD')->nullable();
            $table->string('SOBRE_SUELDO_JEFATURA')->nullable();
            $table->string('TIPO_CONTRATACION')->nullable();
            $table->string('SEDE')->nullable();
            $table->string('DEPARTAMENTO')->nullable();
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
        Schema::dropIfExists('dato26s');
    }
};
