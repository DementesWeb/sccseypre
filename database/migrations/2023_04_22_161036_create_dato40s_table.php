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
        Schema::create('dato40s', function (Blueprint $table) {
            $table->id('ID');
            $table->string('CEDULA');
            $table->string('NOMBRE');
            $table->string('EMAIL');
            $table->string('TEL1');
            $table->string('TEL2');
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
        Schema::dropIfExists('dato40s');
    }
};
