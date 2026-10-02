<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TherapySession extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'song_title',
        'difficulty',
        'hand_used',
        'score',
        'max_combo',
        'accuracy',
        'duration_seconds',
        'gestures_hit',
        'gestures_missed',
        'notes',
        'played_at',
    ];

    protected function casts(): array
    {
        return [
            'accuracy' => 'decimal:2',
            'played_at' => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
