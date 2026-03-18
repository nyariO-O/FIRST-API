<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;public $timestamps=false;
    protected $fillable=['image'];
    public function game()
    {

        return $this->hasOne(Image::class, 'game_image');
    }

}
