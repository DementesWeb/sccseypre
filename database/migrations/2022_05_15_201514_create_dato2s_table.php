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
        Schema::create('dato2s', function (Blueprint $table) {
            $table->id();
            $table->string('cedula')->nullable();
            $table->string('nombre')->nullable();
            $table->string('telefono_casa')->nullable();
            $table->string('telefono_oficina')->nullable();
            $table->string('celular')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('direccion_postal')->nullable();
            $table->longText('direccion')->nullable();
            $table->string('telefono_residencia_cable')->nullable();
            $table->string('telefono_oficina_cable')->nullable();
            $table->string('telefono_celular_cable')->nullable();
            $table->string('email_cable')->nullable();
            $table->string('direccion_postal_cable')->nullable();
            $table->string('fax_cable')->nullable();
            $table->string('direccion_fisica')->nullable();
            $table->string('direccion_correspondencia')->nullable();
            $table->string('telefono_contacto')->nullable();
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
        Schema::dropIfExists('dato2s');
    }
};
