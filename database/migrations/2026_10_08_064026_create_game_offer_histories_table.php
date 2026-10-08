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
        Schema::create('game_offer_histories', function (Blueprint $table): void {
            $table->id();
            $table->timestamps();
            $table->foreignId('game_offer_id')->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('original_price');
            $table->unsignedTinyInteger('discount_percentage');
            $table->unsignedBigInteger('final_price');
            $table->timestamp('recorded_at')->useCurrent()->index();
            $table->boolean('is_simulated')->default(true);

            $table->unique(['game_offer_id', 'recorded_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_offer_histories');
    }
};
