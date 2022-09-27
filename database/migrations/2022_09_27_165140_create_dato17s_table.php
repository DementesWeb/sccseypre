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
        Schema::create('dato17s', function (Blueprint $table) {
            $table->id();
            $table->string('NOMBRE_Y_APELLIDO')->nullable();
            $table->string('CARGO')->nullable();
            $table->string('ESTADO')->nullable();
            $table->string('ESC_SALARIAL')->nullable();
            $table->string('ASIGNADO')->nullable();
            $table->double('SALARIO')->nullable();
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
        Schema::dropIfExists('dato17s');
    }
};
