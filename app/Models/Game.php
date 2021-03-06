<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    public function path()
    {
        return '/games/' . $this->id;
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
