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
        Schema::create('dato44s', function (Blueprint $table) {
            $table->id();
            $table->string('MINI')->nullable();
            $table->string('PLANILLA')->nullable();
            $table->string('POSICION')->nullable();
            $table->string('CLAVE')->nullable();
            $table->string('AEFEC')->nullable();
            $table->string('EFEC')->nullable();
            $table->string('SALDO')->nullable();
            $table->string('NOMBRE_DESC')->nullable();
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
        Schema::dropIfExists('dato44s');
    }
};
