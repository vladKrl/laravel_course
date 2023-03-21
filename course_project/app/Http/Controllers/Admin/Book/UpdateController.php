<?php

namespace App\Http\Controllers\Admin\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Book;
use App\Http\Requests\Admin\Book\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Book $book){
        $data = $request->validated();

        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images/authors', $data['image']);
        }

        $book->update($data);
        
        return redirect()->route('admin.book.show', $book->id); 
    }
}
