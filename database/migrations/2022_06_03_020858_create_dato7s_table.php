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
        Schema::create('dato7s', function (Blueprint $table) {
            $table->id();
            $table->string('cedula')->nullable();
            $table->string('nombre')->nullable();
            $table->string('empresa_1')->nullable();
            $table->string('empresa_2')->nullable();
            $table->string('numero_1')->nullable();
            $table->string('numero_2')->nullable();
            $table->string('salario_neto')->nullable();
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
        Schema::dropIfExists('dato7s');
    }
};
