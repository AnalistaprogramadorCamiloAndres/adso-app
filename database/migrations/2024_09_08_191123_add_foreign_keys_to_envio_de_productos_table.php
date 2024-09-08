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
        Schema::table('envio de productos', function (Blueprint $table) {
            $table->foreign(['ID EMPLEADO FK'], 'ID EMPLEADO_')->references(['ID EMPLEADO'])->on('empleados')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['ID PRODUCTO FK'], 'ID PRODUCTO FK_')->references(['ID PRODUCTO'])->on('producto')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('envio de productos', function (Blueprint $table) {
            $table->dropForeign('ID EMPLEADO_');
            $table->dropForeign('ID PRODUCTO FK_');
        });
    }
};
