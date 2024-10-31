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
        Schema::create('hoja_de_trabajos', function (Blueprint $table) {
            $table->id('id_htrabajo');
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->foreign('id_cliente') ->references('id')->on('clientes') ->onDelete('set null');
            $table->unsignedBigInteger('id_vehiculo')->nullable();
            $table->foreign('id_vehiculo') ->references('id')->on('vehiculos') ->onDelete('set null');
            $table->unsignedBigInteger('id_mecanico')->nullable();
            $table->foreign('id_mecanico') ->references('id')->on('users') ->onDelete('set null');
            $table->date('fecha_ingreso')->nullable();
            $table->date('fecha_salida')->nullable();
            $table->double('total_serv', 6, 2)->nullable();
            $table->double('total_prod', 6, 2)->nullable();
            $table->double('total_pago', 6, 2)->nullable();
            $table->string('obs_sp', 300)->nullable();
            $table->timestamps();

            
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoja_de_trabajo');
    }
};
