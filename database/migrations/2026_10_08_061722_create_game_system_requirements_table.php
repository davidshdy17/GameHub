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
        Schema::create('game_system_requirements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained()->cascadeOnDelete();
            $table->string('requirement_type'); // minimum atau recommended
            $table->text('operating_system')->nullable();
            $table->text('processor')->nullable();
            $table->string('memory')->nullable();
            $table->text('graphics')->nullable();
            $table->text('network')->nullable();
            $table->string('storage')->nullable();
            $table->text('sound_card')->nullable();
            $table->timestamps();

            $table->unique(['game_id', 'requirement_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_system_requirements');
    }
};
