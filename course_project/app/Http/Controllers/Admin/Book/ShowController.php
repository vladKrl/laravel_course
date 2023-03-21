<?php

namespace App\Http\Controllers\Admin\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\Admin\Book\StoreRequest;

class ShowController extends Controller
{
    public function __invoke(Book $book){
        $author = $book->author;
        $genre = $book->genre;
        return view('admin.book.show', compact('book', 'author', 'genre'));
    }
}
