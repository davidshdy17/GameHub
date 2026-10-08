<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GameSystemRequirement extends Model
{
    protected $fillable = [
        'requirement_type',
        'operating_system',
        'processor',
        'memory',
        'graphics',
        'network',
        'storage',
        'sound_card',
    ];

        public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }
}
