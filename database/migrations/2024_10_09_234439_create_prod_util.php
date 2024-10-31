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
        Schema::create('prod_utils', function (Blueprint $table) {
            $table->id('id_prod_util');
            $table->unsignedBigInteger('id_htrabajo')->nullable();
            $table->foreign('id_htrabajo') ->references('id_htrabajo')->on('hoja_de_trabajo') ->onDelete('set null');
            $table->unsignedBigInteger('id_producto')->nullable();
            $table->foreign('id_producto') ->references('id')->on('productos') ->onDelete('set null');
            $table->double('precio_prod', 6, 2)->nullable();
            $table->string('obs_prod',500)->nullable();
            $table->date('fecha_prod');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prod_utuil');
    }
};
