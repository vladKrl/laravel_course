<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, App\Models\Author, Illuminate\Support\Facades\Storage;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();

        return view('author.index', compact('authors'));    
    }

    public function create(){
        return view('author.create');
    }

    public function store(){
        
        $data = request()->validate([
            'fullname' => 'required|string',
            'birth_country' => 'required|string',
            'birthday' => 'required|date',
            'deathday' => 'exclude_without:deathday|date',
            'image' => 'exclude_without:image|file',
        ]);

        $data['image'] = Storage::put('/public', $data['image']);

        Author::create($data);

        return redirect()->route('author.index');
    }

    public function show(Author $author){
        return view('author.show', compact('author'));
    }

    
    public function edit(Author $author){
        return view('author.edit', compact('author'));
    }

    public function update(Author $author){
        $data = request()->validate([
            'fullname' => 'required|string',
            'birth_country' => 'required|string',
            'birthday' => 'required|date',
            'deathday' => 'exclude_without:deathday|date',
            'image' => 'exclude_without:image|file',
        ]);
        
        $author->update($data);
        
        return redirect()->route('author.show', $author->id);
    }

    public function destroy(Author $author){
        $author->delete();
        
        return redirect()->route('author.index');
    }

    public function firstOrCreate(){
    
        $authorNew =  [
            'fullname' => 'test data fulnlame',
            'birth_country' => 'test data bc',
            'birthday' => '1825.12.14',
            'deathday' => '1892.04.10',
            'image' => NULL,
        ];

        $author = Author::firstOrCreate([
            'fullname' => 'test data fullname',
        ], $authorNew);

        dd($author->birth_country);
    }

    public function updateOrCreate(){
        
        $authorNew =  [
            'fullname' => 'test data fullname',
            'birth_country' => 'test data bc',
            'birthday' => '1825.12.14',
            'deathday' => '1892.04.10',
            'image' => NULL,
        ];

        $author = Author::updateOrCreate([
            'fullname' => 'test data fullname',
        ], $authorNew);
        
        dd($author->birth_country);
    }
}
