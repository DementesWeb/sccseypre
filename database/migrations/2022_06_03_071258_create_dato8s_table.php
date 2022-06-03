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
        Schema::create('dato8s', function (Blueprint $table) {
            $table->id();
            $table->string('CEDULA')->nullable();
            $table->string('NOMBRE')->nullable();
            $table->string('LUGAR_DE_TRABAJO')->nullable();
            $table->string('SALARIO')->nullable();
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
        Schema::dropIfExists('dato8s');
    }
};
