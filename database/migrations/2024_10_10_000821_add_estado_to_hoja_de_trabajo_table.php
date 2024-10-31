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
        Schema::table('hoja_de_trabajos', function (Blueprint $table) {
            //
            $table->string('estado_trab', 3)->nullable()->after('id_mecanico');
            $table->string('cantidad_serv', 3)->nullable()->after('fecha_salida');
            $table->string('cantidad_prod', 3)->nullable()->after('total_serv');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hoja_de_trabajos', function (Blueprint $table) {
            $table->dropColumn('estado_trab');
            $table->dropColumn('cantidad_serv');
            $table->dropColumn('cantidad_prod');
        });
    }
};
