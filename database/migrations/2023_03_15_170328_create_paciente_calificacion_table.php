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
        Schema::create('paciente_calificacion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('calificacion_id');
            $table->unsignedBigInteger('paciente_id');


            $table->foreign('calificacion_id')
            ->references('id')
            ->on('calificaciones')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('paciente_id')
            ->references('id')
            ->on('pacientes')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paciente_calificacion');
    }
};
