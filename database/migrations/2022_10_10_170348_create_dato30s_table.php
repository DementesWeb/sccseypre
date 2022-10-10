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
        Schema::create('dato30s', function (Blueprint $table) {
            $table->id();
            $table->string('NOMBRE')->nullable();
            $table->string('APELLIDO')->nullable();
            $table->string('CEDULA')->nullable();
            $table->string('CARGO')->nullable();
            $table->string('SALARIO_MENSUAL')->nullable();
            $table->string('INICIO_DE_LABORES')->nullable();
            $table->string('OBJETO_DE_GASTO')->nullable();
            $table->string('ESTATUS')->nullable();
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
        Schema::dropIfExists('dato30s');
    }
};
