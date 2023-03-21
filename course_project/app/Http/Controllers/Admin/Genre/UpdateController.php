<?php

namespace App\Http\Controllers\Admin\Genre;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Genre;
use App\Http\Requests\Admin\Genre\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Genre $genre){
        $data = $request->validated();

        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images/authors', $data['image']);
        }

        $genre->update($data);
        
        return redirect()->route('admin.genre.show', $genre->id); 
    }
}
