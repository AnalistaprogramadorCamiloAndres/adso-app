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
        Schema::create('inspección de calidad', function (Blueprint $table) {
            $table->string('ID INSPECCION DE CALIDAD')->primary();
            $table->longText('PARAMETROS DE CONTROL')->nullable();
            $table->text('NIVEL DE CONFORMIDAD')->nullable();
            $table->dateTime('FECHA DE INSPECCION')->nullable();
            $table->text('RESPONSABLE DE LA INSPECCION')->nullable();
            $table->text('CRITERIOS DE ACEPTACION')->nullable();
            $table->text('APROBACION DE LA INSPECCION')->nullable();
            $table->text('ACCIONES CORRECTIVAS')->nullable();
            $table->string('ID NUMERO DE LOTE FK')->nullable()->index('id numero de lote fk');
            $table->string('ID EMPLEADO FK')->nullable()->index('id empleado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspección de calidad');
    }
};
