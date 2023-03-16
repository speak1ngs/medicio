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
        Schema::create('administrador_rol', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('administrador_id');
            $table->unsignedBigInteger('rol_id');

            $table->foreign('administrador_id')
            ->references('id')
            ->on('administradores')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('rol_id')
            ->references('id')
            ->on('roles')
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
        Schema::dropIfExists('administrador_rol');
    }
};
