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
        Schema::create('reserva_models', function (Blueprint $table) {
            $table->id();
            $table->string('matricula');
            $table->string('numero');
            $table->date('data');
            $table->time('horario');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva_models');
        #Schema::dropIfExists('reservations');
    }
};
