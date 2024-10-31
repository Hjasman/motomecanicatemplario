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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id('id_solicitud');
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->foreign('id_cliente') ->references('id')->on('clientes') ->onDelete('set null');
            $table->unsignedBigInteger('id_htrabajo')->nullable();
            $table->foreign('id_htrabajo') ->references('id_htrabajo')->on('hoja_de_trabajo') ->onDelete('set null');
            $table->string('solicitud',300)->nullable();
            $table->date('fecha_soli');
                        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_solicitud');
    }
};
