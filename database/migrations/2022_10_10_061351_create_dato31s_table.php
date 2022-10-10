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
        Schema::create('dato31s', function (Blueprint $table) {
            $table->id();
            $table->string('N_TEL')->nullable();
            $table->string('CEDULA')->nullable();
            $table->string('PRIMER_NOMBRE')->nullable();
            $table->string('TEL')->nullable();
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
        Schema::dropIfExists('dato31s');
    }
};
