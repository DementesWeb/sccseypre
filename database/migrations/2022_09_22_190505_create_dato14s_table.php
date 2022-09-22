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
        Schema::create('dato14s', function (Blueprint $table) {
            $table->id();
            $table->string('APELLIDO')->nullable();
            $table->string('NOMBRE')->nullable();
            $table->string('CEDULA')->nullable();
            $table->string('CARGO')->nullable();
            $table->string('SALARIO_MENSUAL')->nullable();
            $table->string('GASTO_DE_REPRESENTACIO')->nullable();
            $table->string('TOTAL')->nullable();
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
        Schema::dropIfExists('dato14s');
    }
};
