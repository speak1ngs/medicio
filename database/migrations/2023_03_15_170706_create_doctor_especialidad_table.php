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
        Schema::create('doctor_especialidad', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('especialidad_id');
            $table->unsignedBigInteger('doctor_id');

            $table->foreign('especialidad_id')
            ->references('id')
            ->on('especialidades')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('doctor_id')
            ->references('id')
            ->on('doctores')
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
        Schema::dropIfExists('doctor_especialidad');
    }
};
