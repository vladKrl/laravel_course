<?php

namespace App\Http\Controllers\Personal\Book\Like;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class StoreController extends Controller
{
    public function __invoke(Book $book){
        
        auth()->user()->likedBooks()->toggle($book->id);
        return redirect()->back();
    }
}
