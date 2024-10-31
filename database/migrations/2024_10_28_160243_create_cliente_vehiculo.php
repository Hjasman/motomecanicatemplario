+
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
        Schema::create('cliente_vehiculo', function (Blueprint $table) {
            $table->id();
           $table->unsignedBigInteger('id_cliente')->nullable();
            $table->foreign('id_cliente') ->references('id')->on('clientes') ->onDelete('set null');
            $table->unsignedBigInteger('id_vehiculo')->nullable();
            $table->foreign('id_vehiculo') ->references('id')->on('vehiculos') ->onDelete('set null');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente_vehiculo');
    }
};
