<?php

namespace App\Http\Controllers\Personal\Liked;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class DestroyController extends Controller
{
    public function __invoke(Book $book){
        auth()->user()->likedBooks()->detach($book->id);
        
        return redirect()->route('personal.liked.index');
    }
}
