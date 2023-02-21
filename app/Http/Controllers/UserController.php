<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function edit(){
        return view('users.edit',['user' => Auth::user()]);
    }

    public function update(Request $request){

    }

    public function show(User $user){
        $user->load('links');
        return view('links.share',['user' => $user]);
    }
}
