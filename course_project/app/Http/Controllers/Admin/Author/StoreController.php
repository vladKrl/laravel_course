<?php

namespace App\Http\Controllers\Admin\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Author;
use App\Http\Requests\Admin\Author\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();

        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images/authors', $data['image']);
        } else {
            $data['image'] = 'images/undefined.jpg';
        }
    
        Author::create($data);

        return redirect()->route('admin.author.index');    
    }
}
