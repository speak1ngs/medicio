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
        Schema::create('doctor_calificacion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('calificacion_id');

            $table->foreign('doctor_id')
            ->references('id')
            ->on('doctores')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('calificacion_id')
            ->references('id')
            ->on('calificaciones')
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
        Schema::dropIfExists('doctor_calificacion');
    }
};
