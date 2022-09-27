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
        Schema::create('dato16s', function (Blueprint $table) {
            $table->id();
            $table->string('NOMBRE')->nullable();
            $table->string('CEDULA')->nullable();
            $table->string('CARGO')->nullable();
            $table->string('UNIDAD')->nullable();
            $table->string('FECHA_INICIO')->nullable();
            $table->string('SALARIO')->nullable();
            $table->string('SUB_SUELDO')->nullable();
            $table->string('GASTO_REPRESENTACION')->nullable();
            $table->string('TOTAL')->nullable();
            $table->string('CODGAST')->nullable();
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
        Schema::dropIfExists('dato16s');
    }
};
