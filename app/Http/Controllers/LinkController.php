<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use Auth;
use Session;

class LinkController extends Controller
{
    public function index(){
        $links = Auth::user()->links()
                ->withCount('visits')
                ->with('last_visit') 
                ->get();

        return $links;
        return view('links.index',['links'=> $links]);
    }

    public function create(){
        return view('links.create');
    }

    public function store(Request $request){
        $user = Auth::user()->id;
        
        $request->validate([
            "name" => "required|max:255",
            "link" => "required|url"
        ]);

        $link = new Link;
        $link->user_id = $user;
        $link->name = $request->name;
        $link->link = $request->link;
        $link->save();

        Session::flash("success","Link added successfully.");
        return redirect('/dashboard/links');
    }

    public function edit(Link $link){
        if(Auth::user()->id != $link->user_id){
            return abort(404);
        }

        return view('links.edit',['link'=>$link]);
    }

    public function update(Request $request, Link $link){

        $request->validate([
            "name" => "required|max:255",
            "link" => "required|url"
        ]);

        $link->update($request->only(['name','link']));
        
        Session::flash('success','Link updated successfully.');

        return redirect('dashboard/links');
    }

    public function destroy(Request $request, Link $link){
        if(Auth::id() != $link->user_id){
            abort(403);
        }

        $link->delete();

        Session::flash('alert','Link Deleted');
        return redirect('/dashboard/links');
    }

}
