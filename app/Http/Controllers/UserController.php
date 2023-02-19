<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function edit(){

    }

    public function update(Request $request){

    }

    public function show(User $user){
        $links =  $user->links()->latest()->get();
        return view('links.share',['user' => $user, 'links' => $links]);
    }
}
