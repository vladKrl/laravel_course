<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class IndexController extends Controller
{
    public function __invoke(){
        $books = Book::all();
        return view('personal.main.index', compact('books'));
    }
}
