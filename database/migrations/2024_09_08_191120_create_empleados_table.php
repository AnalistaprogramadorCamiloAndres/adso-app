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
        Schema::create('empleados', function (Blueprint $table) {
            $table->string('ID EMPLEADO')->primary();
            $table->text('NOMBRES')->nullable();
            $table->text('APELLIDOS')->nullable();
            $table->text('CARGO')->nullable();
            $table->string('TELEFONO')->nullable();
            $table->string('CORREO ELECTRONICO')->nullable();
            $table->string('DIRECCION')->nullable();
            $table->decimal('CEDULA DE CIUDADANIA', 10, 0)->nullable();
            $table->string('ID USUARIO FK')->nullable()->index('id usuario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
