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
        Schema::create('dato1s', function (Blueprint $table) {
            $table->id();
            $table->string('CEDULA')->nullable();
            $table->string('NOMBRE')->nullable();
            $table->string('SUSCRIPTOR')->nullable();
            $table->string('CELULAR')->nullable();
            $table->string('TELEFONO')->nullable();
            $table->string('BARRIO')->nullable();
            $table->string('CEDULA_SIN_FORMATO')->nullable();
            $table->string('CUENTA')->nullable();
            $table->string('CUENTA_BARRIO')->nullable();
            $table->string('NOMBRE_CUENTA')->nullable();
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
        Schema::dropIfExists('dato1s');
    }
};
