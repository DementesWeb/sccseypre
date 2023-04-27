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
        Schema::create('dato41s', function (Blueprint $table) {
            $table->id();
            $table->string('POS')->nullable();;
            $table->string('Cedula')->nullable();;
            $table->string('Nombre')->nullable();;
            $table->string('Cargo')->nullable();;
            $table->string('Departamento')->nullable();;
            $table->string('Estado')->nullable();;
            $table->string('F_Inicio')->nullable();;
            $table->string('Obj_Gasto')->nullable();;
            $table->string('Salario')->nullable();;
            $table->string('Gastos')->nullable();;
            $table->string('S_Sueldo')->nullable();;
            $table->string('Total')->nullable();
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
        Schema::dropIfExists('dato41s');
    }
};
