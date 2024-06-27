<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'release_date',
        'developer',
        'publisher',
        'platform',
        'genre',
        'description',
    ];

    /**
     * The users that belong to the game.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_games')->withPivot('status', 'rating', 'started_at', 'finished_at', 'comments');
    }
    
}
