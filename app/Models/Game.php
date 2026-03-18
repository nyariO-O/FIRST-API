<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=['game_name',
'game_description',
 'game_image',
'game_price',
'game_min_req',
'publisher',
'developer',
'release_date',
'language'];
    public function image()
    {
        return $this->belongsTo(Image::class, 'game_image');
    }
}
