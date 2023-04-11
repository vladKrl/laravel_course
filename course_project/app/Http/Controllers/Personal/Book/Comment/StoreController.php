<?php

namespace App\Http\Controllers\Personal\Book\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Comment;
use App\Http\Requests\Personal\Comment\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Book $book){
        $data = $request->validated();
        
        $data['user_id'] = auth()->user()->id;
        $data['book_id'] = $book->id;

        Comment::create($data);
        return redirect()->route('personal.book.show', $book->id);
    }
}
