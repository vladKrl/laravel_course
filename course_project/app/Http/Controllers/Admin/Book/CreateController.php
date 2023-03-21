<?php

namespace App\Http\Controllers\Admin\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author, App\Models\Genre;

class CreateController extends Controller
{
    public function __invoke(){
        $authors = Author::all();
        $genres = Genre::all();
        return view('admin.book.create', compact('authors', 'genres'));
    }
}
