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
        Schema::create('servicio_reals', function (Blueprint $table) {
            $table->id('id_servi_real');
            $table->unsignedBigInteger('id_htrabajo')->nullable();
            $table->foreign('id_htrabajo') ->references('id_htrabajo')->on('hoja_de_trabajo') ->onDelete('set null');
            $table->unsignedBigInteger('id_servicio')->nullable();
            $table->foreign('id_servicio') ->references('id')->on('servicios') ->onDelete('set null');
            $table->unsignedBigInteger('id_mecanico')->nullable();
            $table->foreign('id_mecanico') ->references('id')->on('users') ->onDelete('set null');
            $table->double('precio_serv', 6, 2)->nullable();
            $table->string('obs_servreal',500)->nullable();
            $table->date('fecha_serreal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicio_real');
    }
};
