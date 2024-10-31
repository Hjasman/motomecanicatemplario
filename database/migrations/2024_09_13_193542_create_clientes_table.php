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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres_cl', 50);//para 50 caracteres 
            $table->string('ap_paterno_cl', 50);//para 50 caracteres 
            $table->string('ap_Materno_cl', 50)->nullable();
            $table->string('email_cl', 50)->nullable();
            $table->integer('celular_cl');//para escribir texto largo 
            $table->char('observaciones_cl', 255);//para 2 caracteres

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
