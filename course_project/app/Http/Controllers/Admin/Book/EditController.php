<?php

namespace App\Http\Controllers\Admin\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book, App\Models\Author, App\Models\Genre;


class EditController extends Controller
{
    public function __invoke(Book $book){
        $authors =  Author::all();
        $genres =  Genre::all();
        return view('admin.book.edit', compact('book', 'authors', 'genres'));
    }
}
