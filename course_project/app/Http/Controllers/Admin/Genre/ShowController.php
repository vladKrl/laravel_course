<?php

namespace App\Http\Controllers\Admin\Genre;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\Http\Requests\Admin\Genre\StoreRequest;

class ShowController extends Controller
{
    public function __invoke(Genre $genre){
        $books = $genre->books;
   
        return view('admin.genre.show', compact('genre', 'books')); 
    }
}
