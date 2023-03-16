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
        Schema::create('consultorio_calificacion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('consultorio_id');
            $table->unsignedBigInteger('calificacion_id');

            $table->foreign('consultorio_id')
            ->references('id')
            ->on('consultorios')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('calificacion_id')
            ->references('id')
            ->on('calificacion_id')
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
        Schema::dropIfExists('consultorio_calificacion');
    }
};
