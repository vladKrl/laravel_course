<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, App\Models\Genre;

class GenreController extends Controller
{
    public function index(){
        $genres = Genre::all();

        return view('genre.index', compact('genres'));
    }

    public function create()
    {
        return view('genre.create');
    }

    public function store(){
              
        $data = request()->validate([
            'title' => 'required|string',
            'short' => 'required|string',
        ]);
        
        Genre::create($data);

        return redirect()->route('genre.index');
    }

    public function show(Genre $genre){
        $books = $genre->books;
        return view('genre.show', compact('genre', 'books'));
    }

    public function edit(Genre $genre){
        return view('genre.edit', compact('genre'));
    }

    public function update(Genre $genre){
        $data = request()->validate([
            'title' => 'required|string',
            'short' => 'required|string',
        ]);
        
        $genre->update($data);
        
        return redirect()->route('genre.show', $genre->id);
    }

    public function destroy(Genre $genre){
        // Author::withTrashed()->find(7)->restore();
        $genre->delete();
        
        return redirect()->route('genre.index');
    }

}
