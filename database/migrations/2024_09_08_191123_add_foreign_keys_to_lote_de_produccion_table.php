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
        Schema::table('lote de produccion', function (Blueprint $table) {
            $table->foreign(['ID ENVIO FK'], 'ID ENVIO FK')->references(['ID ENVIO'])->on('envio de productos')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['ID INSPECCION DE CALIDAD FK'], 'ID INSPECCION DE CALIDAD FK')->references(['ID INSPECCION DE CALIDAD'])->on('inspección de calidad')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['ID PRODUCTO FK'], 'ID PRODUCTO FK')->references(['ID PRODUCTO'])->on('producto')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lote de produccion', function (Blueprint $table) {
            $table->dropForeign('ID ENVIO FK');
            $table->dropForeign('ID INSPECCION DE CALIDAD FK');
            $table->dropForeign('ID PRODUCTO FK');
        });
    }
};
