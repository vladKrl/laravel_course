<?php

namespace App\Http\Controllers\Admin\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Http\Requests\Admin\User\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user){
        $data = $request->validated();

        // if (isset($data['image'])) {
        //     $data['image'] = Storage::disk('public')->put('/images/authors', $data['image']);
        // }

        $user->update($data);
        
        return redirect()->route('admin.user.show', $user->id); 
    }
}
