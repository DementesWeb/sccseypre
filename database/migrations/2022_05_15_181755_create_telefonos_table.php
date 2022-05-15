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
        Schema::create('telefonos', function (Blueprint $table) {
            $table->id();
            $table->string('CED')->nullable();
            $table->string('PRIMER_NOMBRE')->nullable();
            $table->string('SEGUNDO_NOMBRE')->nullable();
            $table->string('APELLIDO_PATERNO')->nullable();
            $table->string('APELLIDO_MATERNO')->nullable();
            $table->string('APELLIDO_CASADA')->nullable();
            $table->string('TEL1')->nullable()->nullable();
            $table->string('TEL2')->nullable();
            $table->string('TEL3')->nullable();
            $table->string('TEL4')->nullable();
            $table->string('TEL5')->nullable();
            $table->string('TEL6')->nullable();
            $table->string('TEL7')->nullable();
            $table->string('TEL8')->nullable();
            $table->string('TEL9')->nullable();
            $table->string('TEL10')->nullable();
            $table->string('TEL11')->nullable();
            $table->string('TEL12')->nullable();
            $table->string('TEL13')->nullable();
            $table->string('TEL14')->nullable();
            $table->string('TEL15')->nullable();
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
        Schema::dropIfExists('telefonos');
    }
};
