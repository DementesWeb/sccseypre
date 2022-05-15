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
        Schema::create('dato4s', function (Blueprint $table) {
            $table->id();
            $table->string("CEDULA")->nullable();
            $table->string("P_NOMBRE")->nullable();
            $table->string("S_NOMBRE")->nullable();
            $table->string("PATERNO")->nullable();
            $table->string("MATERNO")->nullable();
            $table->string("CASADA")->nullable();
            $table->string("SEXO")->nullable();
            $table->string("TEELFONO")->nullable();
            $table->string("FECHA_NACIMIENTO")->nullable();
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
        Schema::dropIfExists('dato4s');
    }
};
