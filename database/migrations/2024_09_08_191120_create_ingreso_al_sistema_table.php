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
        Schema::create('ingreso al sistema', function (Blueprint $table) {
            $table->string('ID_USUARIO')->primary();
            $table->text('NOMBRE_USUARIO')->nullable();
            $table->string('CONTRASEÑA')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingreso al sistema');
    }
};
