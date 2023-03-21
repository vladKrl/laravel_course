<?php

namespace App\Http\Controllers\Admin\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Book;
use App\Http\Requests\Admin\Book\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();

        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images/books', $data['image']);
        } else {
            $data['image'] = 'images/undefined.jpg';
        }
    
        Book::create($data);

        return redirect()->route('admin.book.index');
    }
}
