<?php

namespace App\Http\Controllers\Admin\Genre;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Genre;
use App\Http\Requests\Admin\Genre\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
    
        Genre::create($data);

        return redirect()->route('admin.genre.index');    
    }
}
