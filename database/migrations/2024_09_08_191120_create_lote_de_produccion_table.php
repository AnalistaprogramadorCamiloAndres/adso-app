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
        Schema::create('lote de produccion', function (Blueprint $table) {
            $table->string('ID_NUMERO_DE_LOTE')->primary();
            $table->binary('CANTIDAD PRODUCIDA')->nullable();
            $table->dateTime('FECHA DE PRODUCCION')->nullable();
            $table->dateTime('FECHA DE VENCIMIENTO')->nullable();
            $table->longText('PROVEEDOR DE MATERIA PRIMA')->nullable();
            $table->text('UBICACION DE ALMACENAMIENTO')->nullable();
            $table->string('ID PRODUCTO FK')->index('id producto fk');
            $table->string('ID INSPECCION DE CALIDAD FK')->nullable()->index('id inspeccion de calidad fk');
            $table->string('ID ENVIO FK')->nullable()->index('id envio fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lote de produccion');
    }
};
