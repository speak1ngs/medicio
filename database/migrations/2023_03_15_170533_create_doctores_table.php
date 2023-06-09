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
        Schema::create('doctores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('registro');
            $table->string('usuario',32);
            $table->string('password',32);
            $table->string('foto_url',200);
            $table->integer('telefono_laboral');
            $table->time('registro_expericacion_fecha')->nullable();
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('stat_id');
            $table->unsignedBigInteger('rol_id');

            $table->foreign('persona_id')
            ->references('id')
            ->on('personas')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('stat_id')
            ->references('id')
            ->on('status')
            ->onUpdate('cascade');

            $table->foreign('rol_id')
            ->references('id')
            ->on('roles')
            ->onUpdate('cascade');

            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctores');
    }
};
