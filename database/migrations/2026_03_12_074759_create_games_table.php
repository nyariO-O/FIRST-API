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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('game_name');
            $table->text('game_description');
            $table->foreignId('game_image')->constrained('images')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('game_price');
            $table->foreignId('game_min_req')->constrained('min_sys_reqs')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('publisher');
            $table->string('developer');
            $table->string('release_date');
            $table->string('language');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
