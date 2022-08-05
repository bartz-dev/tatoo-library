<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagArtist extends Model
{
    use HasFactory;

    protected $table = 'tags_artist';

    public function artists() {
        return $this->hasMany(Artist::class, 'artist_id', 'artist_id');
    }
}
