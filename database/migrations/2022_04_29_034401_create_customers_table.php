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
            $table->string('cargo');
            $table->double('sueldo');
            $table->double('sobresueldo');
            $table->double('sueldo_neto');
            $table->double('v35_porciento');
            $table->double('v25_porciento');
            $table->double('v20_porciento');
            $table->string('COD_1');
            $table->double('DES_1');
            $table->date('FEC_1');
            $table->string('COD_2');
            $table->double('DES_2');
            $table->date('FEC_2');
            $table->string('COD_3');
            $table->double('DES_3');
            $table->date('FEC_3');
            $table->string('COD_4');
            $table->double('DES_4');
            $table->date('FEC_4');
            $table->string('COD_5');
            $table->double('DES_5');
            $table->date('FEC_5');
            $table->string('COD_6');
            $table->double('DES_6');
            $table->date('FEC_6');
            $table->string('COD_7');
            $table->double('DES_7');
            $table->date('FEC_7');
            $table->string('COD_8');
            $table->double('DES_8');
            $table->date('FEC_8');
            $table->string('COD_9');
            $table->double('DES_9');
            $table->date('FEC_9');
            $table->string('COD_10');
            $table->double('DES_10');
            $table->date('FEC_10');
            $table->string('COD_11');
            $table->double('DES_11');
            $table->date('FEC_11');
            $table->string('COD_12');
            $table->double('DES_12');
            $table->date('FEC_12');
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
