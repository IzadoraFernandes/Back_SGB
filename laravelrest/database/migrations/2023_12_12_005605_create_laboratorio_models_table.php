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
        Schema::create('laboratorio_models', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('numero');
            $table->string('bloco');
            $table->string('capacidade');
            $table->string('tipo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laboratorio_models');
        #Schema::dropIfExists('laboratories');
    }
};
