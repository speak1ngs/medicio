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
        Schema::create('evaluacion_doctor_cita', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cita_id');
            $table->unsignedBigInteger('evaluacion_doctor_consultorio_id');

            $table->foreign('cita_id')
            ->references('id')
            ->on('citas')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('evaluacion_doctor_consultorio_id')
            ->references('id')
            ->on('evaluaciones_doctores_consultorios')
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
        Schema::dropIfExists('evaluacion_doctor_cita');
    }
};
