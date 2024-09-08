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
        Schema::create('cliente', function (Blueprint $table) {
            $table->string('ID CLIENTE')->primary();
            $table->text('NOMBRE')->nullable();
            $table->text('CORREO ELECTRONICO')->nullable();
            $table->string('DIRECCIÓN')->nullable();
            $table->decimal('CEDULA DE CIUDADANIA', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
