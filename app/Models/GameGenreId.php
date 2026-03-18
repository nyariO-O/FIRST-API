<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameGenreId extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['game_id',
                        'genre_id'];
}
