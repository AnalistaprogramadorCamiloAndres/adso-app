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
        Schema::table('inspección de calidad', function (Blueprint $table) {
            $table->foreign(['ID EMPLEADO FK'], 'ID EMPLEADO')->references(['ID EMPLEADO'])->on('empleados')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['ID NUMERO DE LOTE FK'], 'ID NUMERO DE LOTE FK')->references(['ID_NUMERO_DE_LOTE'])->on('lote de produccion')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inspección de calidad', function (Blueprint $table) {
            $table->dropForeign('ID EMPLEADO');
            $table->dropForeign('ID NUMERO DE LOTE FK');
        });
    }
};
