<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WishlistItem extends Model
{
    protected $fillable = [
        'client_id',
        'game_id',
    ];

    public function game(): BelongsTo{
        return $this->belongsTo(Game::class);
    }
}
