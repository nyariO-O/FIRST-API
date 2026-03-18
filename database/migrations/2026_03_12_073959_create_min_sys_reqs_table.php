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
        Schema::create('min_sys_reqs', function (Blueprint $table) {
            $table->id();
            $table->string('os');
            $table->string('cpu');
            $table->string('ram');
            $table->string('video_card');
            $table->string('directx');
            $table->string('cd');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('min_sys_reqs');
    }
};
