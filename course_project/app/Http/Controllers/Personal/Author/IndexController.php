<?php

namespace App\Http\Controllers\Personal\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class IndexController extends Controller
{
    public function __invoke(){
        $authors = Author::all();
        return view('personal.author.index', compact('authors'));
    }
}
