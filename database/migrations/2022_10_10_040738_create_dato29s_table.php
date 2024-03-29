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
        Schema::create('dato29s', function (Blueprint $table) {
            $table->id();
            $table->string('NOMBRE')->nullable();
            $table->string('APELLIDO')->nullable();
            $table->string('CEDULA')->nullable();
            $table->string('CARGO')->nullable();
            $table->string('UNIDAD')->nullable();
            $table->string('SALARIO')->nullable();
            $table->string('ANTIGUEDAD')->nullable();
            $table->string('OBJETOGASTO')->nullable();
            $table->string('FECHAINGRESO')->nullable();
            $table->string('ESTATUS')->nullable();
            $table->string('TOTAL')->nullable();
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
        Schema::dropIfExists('dato29s');
    }
};
