<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class IndexController extends Controller
{
    public function __invoke(){
        $books = auth()->user()->likedBooks;
        return view('personal.liked.index', compact('books'));
    }
}
