<?php

namespace App\Http\Controllers\Admin\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Author;
use App\Http\Requests\Admin\Author\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Author $author){
        $data = $request->validated();

        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images/authors', $data['image']);
        }

        $author->update($data);
        
        return redirect()->route('admin.author.show', $author->id); 
    }
}
