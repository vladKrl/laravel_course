<?php

namespace App\Http\Controllers\Admin\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class ShowController extends Controller
{
    public function __invoke(Author $author){
        $books = $author->books;
   
        return view('admin.author.show', compact('author', 'books')); 
    }
}
