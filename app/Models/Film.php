<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function kategori()
    {
        return $this->belongsTo(FilmTuru::class,'film_turu_id','id');
    }
}
