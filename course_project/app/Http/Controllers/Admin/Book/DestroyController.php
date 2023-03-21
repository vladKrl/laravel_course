<?php

namespace App\Http\Controllers\Admin\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class DestroyController extends Controller
{
    public function __invoke(Book $book){
        $book->delete();
        return redirect()->route('admin.book.index');
    }
}
