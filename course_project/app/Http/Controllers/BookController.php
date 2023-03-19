<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, App\Models\Book, App\Models\Author, App\Models\Genre;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        // $authors = Author::all();
        // $genres = Genre::all();
        // dd($genres);
        // $author = $books->author();
        // $genre = $books->genre();
        return view('book.index', compact('books'));//, 'authors', 'genres'));
    }

    public function create(){
        $authors = Author::all();
        $genres = Genre::all();
        return view('book.create', compact('authors', 'genres'));
    }

    public function store(){
        
        $data = request()->validate([
            'title' => 'required|string',
            'short' => 'required|string',
            'author_id' => 'required',
            'genre_id' => 'required',
            'image' => 'exclude_without:image|file',
        ]);

        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images/books', $data['image']);
        } else {
            $data['image'] = 'images/undefined.jpg';
        }
    
        Book::create($data);

        return redirect()->route('book.index');
    }

    public function show(Book $book){
        $author = $book->author;
        $genre = $book->genre;
        return view('book.show', compact('book', 'author', 'genre'));
    }

    public function edit(Book $book){
        // $author = $book->author;
        // $genre = $book->genre;
        $authors =  Author::all();
        $genres =  Genre::all();
        return view('book.edit', compact('book', 'authors', 'genres'));
    }

    public function update(Book $book){
        $data = request()->validate([
            'title' => 'required|string',
            'short' => 'required|string',
            'author_id' => 'required',
            'genre_id' => 'required',
            'image' => 'exclude_without:image|file',
        ]);
        
        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images/books', $data['image']);
        }
        
        $book->update($data);
        
        return redirect()->route('book.show', $book->id);
    }

    public function destroy(Book $book){
        $book->delete();
        return redirect()->route('book.index');
    }
}
