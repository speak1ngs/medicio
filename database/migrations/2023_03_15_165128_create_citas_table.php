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
        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('fecha_reservada');
            $table->integer('importe');
            $table->time('horario_reserva');
            $table->unsignedBigInteger('calendario_doctore_id');
            $table->unsignedBigInteger('cita_status_id');
            $table->unsignedInteger('pago_status_id');
            
            $table->foreign('calendario_doctore_id')
            ->references('id')
            ->on('calendarios_doctores')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('citas_status_id')
            ->references('id')
            ->on('citas_status')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            $table->foreign('pago_status_id')
            ->references('id')
            ->on('pagos_status')
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
        Schema::dropIfExists('citas');
    }
};
