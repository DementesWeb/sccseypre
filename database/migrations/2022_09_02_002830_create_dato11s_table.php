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
        Schema::create('dato11s', function (Blueprint $table) {
            $table->id();
            $table->string('NOMBRE')->nullable();
            $table->string('APELLIDOS')->nullable();
            $table->string('CARGO')->nullable();
            $table->string('SALARIO')->nullable();
            $table->string('INICIO_DE_LABORES')->nullable();
            $table->string('OBJETIVO_DE_GASTO')->nullable();
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
        Schema::dropIfExists('dato11s');
    }
};
