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
        Schema::create('producto', function (Blueprint $table) {
            $table->string('ID PRODUCTO')->primary();
            $table->text('NOMBRE PRODUCTO')->nullable();
            $table->text('DESCRIPCION')->nullable();
            $table->decimal('PRECIO', 10, 0)->nullable();
            $table->string('STOCK DISPONIBLE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
