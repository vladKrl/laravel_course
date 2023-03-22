<?php

namespace App\Http\Controllers\Admin\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Http\Requests\Admin\User\StoreRequest;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        // if (isset($data['image'])) {
        //     $data['image'] = Storage::disk('public')->put('/images/authors', $data['image']);
        // } else {
        //     $data['image'] = 'images/undefined.jpg';
        // }
    
        User::firstOrCreate(['email' => $data['email']], $data);

        return redirect()->route('admin.user.index');    
    }
}
