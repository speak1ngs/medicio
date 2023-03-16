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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',45);
            $table->text('body');
            $table->string('extract',45);
            $table->string('slug',45);
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->unsignedBigInteger('categoria_id')->nullable();

            $table->foreign('admin_id')
                    ->references('id')
                    ->on('administradores')
                    ->onDelete('set null');

            $table->foreign('categoria_id')
                    ->references('id')
                    ->on('categorias')
                    ->onDelete('set null');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
