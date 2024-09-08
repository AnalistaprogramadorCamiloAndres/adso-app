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
        Schema::table('facturacion', function (Blueprint $table) {
            $table->foreign(['ID CLIENTE FK'], 'ID CLIENTE FK')->references(['ID CLIENTE'])->on('cliente')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['ID PRODUCTO FK'], 'ID PRODUCTO FK_1')->references(['ID PRODUCTO'])->on('producto')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('facturacion', function (Blueprint $table) {
            $table->dropForeign('ID CLIENTE FK');
            $table->dropForeign('ID PRODUCTO FK_1');
        });
    }
};
