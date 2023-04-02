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
        Schema::create('dato39s', function (Blueprint $table) {
            $table->id();
            $table->string('NUMPANAPASS')->nullable();
            $table->string('TIPODECUENTA')->nullable();
            $table->string('TIPODEDOCUMENTO')->nullable();
            $table->string('CEDULA')->nullable();
            $table->string('NOMBRE')->nullable();
            $table->string('DIRECCION')->nullable();
            $table->string('TAG')->nullable();
            $table->string('MATRICULA')->nullable();
            $table->string('TEL1')->nullable();
            $table->string('TEL2')->nullable();
            $table->string('TEL3')->nullable();
            $table->string('TEL4')->nullable();
            $table->string('EMAIL')->nullable();
            $table->string('TIPO_RECARGA')->nullable();
            $table->string('NUM_TAGS')->nullable();
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
        Schema::dropIfExists('dato39s');
    }
};
