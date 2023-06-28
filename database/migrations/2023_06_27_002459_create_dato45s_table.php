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
        Schema::create('dato45s', function (Blueprint $table) {
            $table->id();
            $table->string('CEDULA')->nullable();
            $table->string('NOMBRE')->nullable();
            $table->string('SUSCRIPTOR')->nullable();
            $table->string('BARRIO')->nullable();
            $table->string('CELULAR')->nullable();
            $table->string('TELEFONO')->nullable();
            $table->string('SALDOCORRIENTE')->nullable();
            $table->string('SALDO30')->nullable();
            $table->string('SALDO60')->nullable();
            $table->string('SALDO90')->nullable();
            $table->string('SALDO90MAS')->nullable();
            $table->string('ESTADO')->nullable();
            $table->string('OBSERVACION')->nullable();
            $table->string('PAGOMINIMO')->nullable();
            $table->string('FECHAVENCE')->nullable();
            $table->string('DESCSALDOCORRIENTE')->nullable();
            $table->string('DESCSALDO30')->nullable();
            $table->string('DESCSALDO60')->nullable();
            $table->string('DESCSALDO90')->nullable();
            $table->string('DESCSALDO90MAS')->nullable();
            $table->string('OPT_02')->nullable();
            $table->string('DEUDATOTAL')->nullable();
            $table->string('CUENTA')->nullable();
            $table->string('CUENTA_BARRIO')->nullable();
            $table->string('NOMBRE_CUENTA')->nullable();
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
        Schema::dropIfExists('dato45s');
    }
};
