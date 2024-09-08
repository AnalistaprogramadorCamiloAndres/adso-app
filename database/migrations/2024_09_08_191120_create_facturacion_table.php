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
        Schema::create('facturacion', function (Blueprint $table) {
            $table->string('ID FACTURA')->primary();
            $table->dateTime('FACTURA FECHA')->nullable();
            $table->decimal('TOTAL DE LA FACTURA', 10, 0)->nullable();
            $table->text('METODO DE PAGO')->nullable();
            $table->string('ID PRODUCTO FK')->nullable()->index('id producto fk_1');
            $table->string('ID CLIENTE FK')->nullable()->index('id cliente fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturacion');
    }
};
