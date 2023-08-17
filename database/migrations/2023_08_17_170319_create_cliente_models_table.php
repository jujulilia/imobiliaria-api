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
        Schema::create('cliente_models', function (Blueprint $table) {
            $table->id();
            $table ->string('nome', 80)->nullable(false);
            $table ->string('email', 100)->unique()->nullable(false);
            $table ->string('telefone', 15) ->nullable(true);
            $table ->string('cpf', 11)->unique()->nullable(false);
            $table ->string('password')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente_models');
    }
};
