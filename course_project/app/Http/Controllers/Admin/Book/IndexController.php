<?php

namespace App\Http\Controllers\Admin\Book;

use App\Models\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(){
        $books = Book::all();

        return view('admin.book.index', compact('books'));//, 'authors', 'genres'));   
    }
}
