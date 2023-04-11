<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookUserLike extends Model
{
    use HasFactory;
    protected $table = 'book_user_likes';
    protected $guarded = [];
}
