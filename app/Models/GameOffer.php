<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GameOffer extends Model
{
    protected $fillable = [
        'game_id',
        'platform',
        'original_price',
        'discount_percentage',
        'final_price',
        'store_url',
    ];
    public function casts(): array
    {
        return [
            'original_price' => 'integer',
            'discount_percentage' => 'integer',
            'final_price' => 'integer',
        ];
    }

    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }
    public function priceHistories(): HasMany
    {
        return $this->hasMany(GameOfferHistory::class);
    }
}
