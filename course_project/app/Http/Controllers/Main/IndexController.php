<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;


class IndexController extends Controller
{
    public function __invoke(){
        $books = Book::all();
        return view('main.index', compact('books'));
    }
}
