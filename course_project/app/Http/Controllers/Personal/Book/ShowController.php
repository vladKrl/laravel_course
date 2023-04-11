<?php

namespace App\Http\Controllers\Personal\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class ShowController extends Controller
{
    public function __invoke(Book $book){
        return view('personal.book.show', compact('book'));
    }
}
