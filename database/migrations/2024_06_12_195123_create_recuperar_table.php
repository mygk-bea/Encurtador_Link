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
        Schema::create('recuperar', function (Blueprint $table) {
            $table->id();
            $table->string('email', 150);
            $table->string('codigo', 150);
            $table->dateTime('tempo_limite');
            $table->string('user_hash', 255);
            $table->timestamps();

            $table->foreign('user_hash')->references('hash')->on('usuario');
            $table->unique('user_hash');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recuperar');
    }
};
