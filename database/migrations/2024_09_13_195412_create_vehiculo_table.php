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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('nroplaca_v',20);
            $table->string('color_v',20)->nullable();
            $table->string('marca_v',20)->nullable();
            $table->string('modelo_v',20)->nullable();
            $table->string('año',4)->nullable();
            $table->string('observaciones_v',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veiculo');
    }
};
