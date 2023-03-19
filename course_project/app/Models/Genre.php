<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'genres';
    protected $guarded = [];

    public function books(){
        return $this->hasMany(Book::class, 'genre_id', 'id');
    }
}
