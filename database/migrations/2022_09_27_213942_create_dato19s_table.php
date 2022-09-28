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
        Schema::create('dato19s', function (Blueprint $table) {
            $table->id();
            $table->string('CEDULA')->nullable();
            $table->string('NOMBRE')->nullable();
            $table->string('SEXO')->nullable();
            $table->string('SEGSOC')->nullable();
            $table->string('PROV')->nullable();
            $table->string('PLANILLA')->nullable();
            $table->string('POSICION')->nullable();
            $table->string('SAL_BR')->nullable();
            $table->string('SAL_NETO')->nullable();
            $table->string('DEP')->nullable();
            $table->string('MINI_DES')->nullable();
            $table->string('MINI')->nullable();
            $table->string('DES_1')->nullable();
            $table->string('DES_2')->nullable();
            $table->string('DES_3')->nullable();
            $table->string('DES_4')->nullable();
            $table->string('DES_5')->nullable();
            $table->string('DES_6')->nullable();
            $table->string('DES_7')->nullable();
            $table->string('DES_8')->nullable();
            $table->string('DES_9')->nullable();
            $table->string('DES_10')->nullable();
            $table->string('DES_11')->nullable();
            $table->string('COD_1')->nullable();
            $table->string('COD_2')->nullable();
            $table->string('COD_3')->nullable();
            $table->string('COD_4')->nullable();
            $table->string('COD_5')->nullable();
            $table->string('COD_6')->nullable();
            $table->string('COD_7')->nullable();
            $table->string('COD_8')->nullable();
            $table->string('COD_9')->nullable();
            $table->string('COD_10')->nullable();
            $table->string('COD_11')->nullable();
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
        Schema::dropIfExists('dato19s');
    }
};
