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
        Schema::create('dato20s', function (Blueprint $table) {
            $table->id();
            $table->string('NOMBRE')->nullable();
            $table->string('APELLIDO')->nullable();
            $table->string('CEDULA')->nullable();
            $table->string('CARGO')->nullable();
            $table->double('SALARIO_MENSUAL')->nullable();
            $table->string('FECHA_DE_INICIO')->nullable();
            $table->string('ESTADO')->nullable();
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
        Schema::dropIfExists('dato20s');
    }
};
