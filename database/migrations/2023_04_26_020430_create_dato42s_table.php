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
        Schema::create('dato42s', function (Blueprint $table) {
            $table->id();
            $table->string('CUENTA')->nullable();
            $table->string('CLIENTE')->nullable();
            $table->string('CEDULA')->nullable();
            $table->string('TEL1')->nullable();
            $table->string('TEL2')->nullable();
            $table->string('EMAIL')->nullable();
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
        Schema::dropIfExists('dato42s');
    }
};
