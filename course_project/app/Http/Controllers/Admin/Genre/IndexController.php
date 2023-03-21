<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Models\Genre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(){
        $genres = Genre::all();

        return view('admin.genre.index', compact('genres'));     
    }
}
