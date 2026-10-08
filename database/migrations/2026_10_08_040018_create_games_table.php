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
        Schema::create('games', function (Blueprint $table): void {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('genre')->index();
            $table->date('release_date')->index();
            $table->text('cover_image')->nullable();
            $table->unsignedBigInteger('popularity')->default(0)->index();

        });

        Schema::create('game_offers', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('game_id')->constrained()->cascadeOnDelete();
            $table->string('platform');
            $table->unsignedBigInteger('original_price');
            $table->unsignedTinyInteger('discount_percentage');
            $table->unsignedBigInteger('final_price');
            $table->text('store_url');
            $table->timestamps();
            $table->unique(['game_id', 'platform']);
            $table->index(['platform', 'discount_percentage']);
            $table->index('final_price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_offers');
        Schema::dropIfExists('games');

    }
};
