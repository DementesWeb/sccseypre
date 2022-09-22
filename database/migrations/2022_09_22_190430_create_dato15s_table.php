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
        Schema::create('dato15s', function (Blueprint $table) {
            $table->id();
            $table->string('NOMBRE')->nullable();
            $table->string('CEDULA')->nullable();
            $table->string('CARGO')->nullable();
            $table->string('UNIDAD')->nullable();
            $table->string('FECINI')->nullable();
            $table->string('SALARIO')->nullable();
            $table->string('SSUELDO')->nullable();
            $table->string('GASTOREP')->nullable();
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
        Schema::dropIfExists('dato15s');
    }
};
