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
        Schema::create('calendario_doctor_dia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('calendario_doctores_id');
            $table->unsignedBigInteger('dia_id');

            $table->foreign('calendario_doctores_id')
            ->references('id')
            ->on('calendarios_doctores')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('dia_id')
            ->references('id')
            ->on('dias')
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
        Schema::dropIfExists('calendario_doctor_dia');
    }
};
