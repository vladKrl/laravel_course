<?php

namespace App\Http\Controllers\Admin\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class EditController extends Controller
{
    public function __invoke(Author $author){
        return view('admin.author.edit', compact('author'));
    }
}
