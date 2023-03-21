<?php

namespace App\Http\Controllers\Admin\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class DestroyController extends Controller
{
    public function __invoke(Author $author){
        $author->delete();
        
        return redirect()->route('admin.author.index');
    }
}
