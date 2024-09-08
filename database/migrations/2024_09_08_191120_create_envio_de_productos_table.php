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
        Schema::create('envio de productos', function (Blueprint $table) {
            $table->string('ID ENVIO')->primary();
            $table->dateTime('FECHA DE ENVIO')->nullable();
            $table->text('TRANSPORTE UTILIZADO')->nullable();
            $table->text('EMBALAJE')->nullable();
            $table->string('ID PRODUCTO FK')->nullable()->index('id producto fk_');
            $table->string('ID EMPLEADO FK')->nullable()->index('id empleado_');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envio de productos');
    }
};
