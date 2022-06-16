<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{

    protected $primaryKey = "collection_id";

    public function artist() 
    {
        return $this->belongsTo(Artist::class, 'artist_id', 'artist_id');
    }
}
