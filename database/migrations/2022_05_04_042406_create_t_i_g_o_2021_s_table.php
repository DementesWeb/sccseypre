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
        Schema::create('t_i_g_o_2021_s', function (Blueprint $table) {
            $table->id();
            $table->string('NOMBRE_CLIENTE')->nullable();
            $table->string('SUSCRIPTOR')->nullable();
            $table->string('BARRIO')->nullable();
            $table->string('CELULAR')->nullable();
            $table->string('TELEFONO')->nullable();
            $table->string('EMAIL')->nullable();
            $table->string('EMAIL_CABLE')->nullable();
            $table->double('SALDOCORRIENTE')->nullable();
            $table->double('SALDO30')->nullable();
            $table->integer('SALDO60')->nullable();
            $table->integer('SALDO90')->nullable();
            $table->integer('SALDO90MAS')->nullable();
            $table->string('ESTADO')->nullable();
            $table->double('DEUDATOTAL')->nullable();
            $table->dateTime('FECHA_ACTUALIZACION')->nullable();
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
        Schema::dropIfExists('t_i_g_o_2021_s');
    }
};
