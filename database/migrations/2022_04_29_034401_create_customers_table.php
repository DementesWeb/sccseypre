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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_y_apellido');
            $table->string('cedula');
            $table->string('cargo')->nullable();
            $table->double('sueldo')->nullable();
            $table->double('sobresueldo')->nullable();
            $table->double('sueldo_neto')->nullable();
            $table->double('v35_porciento')->nullable();
            $table->double('v25_porciento')->nullable();
            $table->double('v20_porciento')->nullable();
            $table->string('COD_1')->nullable();
            $table->double('DES_1')->nullable();
            $table->date('FEC_1')->nullable();
            $table->string('COD_2')->nullable();
            $table->double('DES_2')->nullable();
            $table->date('FEC_2')->nullable();
            $table->string('COD_3')->nullable();
            $table->double('DES_3')->nullable();
            $table->date('FEC_3')->nullable();
            $table->string('COD_4')->nullable();
            $table->double('DES_4')->nullable();
            $table->date('FEC_4')->nullable();
            $table->string('COD_5')->nullable();
            $table->double('DES_5')->nullable();
            $table->date('FEC_5')->nullable();
            $table->string('COD_6')->nullable();
            $table->double('DES_6')->nullable();
            $table->date('FEC_6')->nullable();
            $table->string('COD_7')->nullable();
            $table->double('DES_7')->nullable();
            $table->date('FEC_7')->nullable();
            $table->string('COD_8')->nullable();
            $table->double('DES_8')->nullable();
            $table->date('FEC_8')->nullable();
            $table->string('COD_9')->nullable();
            $table->double('DES_9')->nullable();
            $table->date('FEC_9')->nullable();
            $table->string('COD_10')->nullable();
            $table->double('DES_10')->nullable();
            $table->date('FEC_10')->nullable();
            $table->string('COD_11')->nullable();
            $table->double('DES_11')->nullable();
            $table->date('FEC_11')->nullable();
            $table->string('COD_12')->nullable();
            $table->double('DES_12')->nullable();
            $table->date('FEC_12')->nullable();
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
        Schema::dropIfExists('customers');
    }
};
