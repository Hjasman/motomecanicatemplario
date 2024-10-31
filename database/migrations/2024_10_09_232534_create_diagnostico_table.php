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
        Schema::create('diagnosticos', function (Blueprint $table) {
            $table->id('id_diagnostico');
            $table->unsignedBigInteger('id_htrabajo')->nullable();
            $table->foreign('id_htrabajo') ->references('id_htrabajo')->on('hoja_de_trabajo') ->onDelete('set null');
            $table->unsignedBigInteger('id_mecanico')->nullable();
            $table->foreign('id_mecanico') ->references('id')->on('users') ->onDelete('set null');
            $table->string('diagnostico',500)->nullable();
            $table->date('fecha_diag');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnostico');
    }
};
