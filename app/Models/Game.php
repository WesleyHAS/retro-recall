<?php

// app/Models/Game.php

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

    // Relationships, methods, or other logic can be added here
}
