<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('idCliente');
            $table->Boolean('empresa');
            $table->String('numeroFiscal');
            $table->String('documentoIdentidad');
            $table->String('razonSocial');
            $table->String('nombres');
            $table->String('apellidos');
            $table->String('direccion');
            $table->String('ciudad');
            $table->String('departamento');
            $table->String('telefono');
            $table->String('geolocation');
            $table->String('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
