<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GameOfferHistory extends Model
{
    protected $fillable = [
        'original_price',
        'discount_percentage',
        'final_price',
        'recorded_at',
        'is_simulated',
    ];

    protected function casts(): array
    {
        return [
            'original_price' => 'integer',
            'discount_percentage' => 'integer',
            'final_price' => 'integer',
            'recorded_at' => 'datetime',
            'is_simulated' => 'boolean',
        ];
    }

    public function offer(): BelongsTo
    {
        return $this->belongsTo(GameOffer::class, 'game_offer_id');
    }
}
