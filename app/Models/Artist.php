<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $primaryKey = 'artist_id'; 

    public function collections() {
        return $this->hasMany(Collection::class, 'artist_id', 'artist_id');
    }
}
