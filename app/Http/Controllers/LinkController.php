<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use App\Models\Visit;
use Auth;
use Session;

class LinkController extends Controller
{
    public function index(){
        $links = Auth::user()->links()
                ->withCount('visits')
                ->with('last_visit') 
                ->get();
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

    public function insights(){

        $visits = Visit::select('user_agent')->get();
        $countUserAgents = array([
            'Firefox' => 0,
            'Chrome'=> 0,
            'Safari' => 0,
            'Brave' => 0,
            'Opera' => 0,
            'Edge' => 0,
            'Others'=>0 
        ]);

        

        foreach($visits as $visit){
            if(preg_match('/Firefox/i',$visit)) $countUserAgents[0]['Firefox'] += 1;
            else if(preg_match('/Chrome/i',$visit)) $countUserAgents[0]['Chrome'] += 1;
            else if(preg_match('/Safari/i',$visit)) $countUserAgents[0]['Safari'] += 1;
            else if(preg_match('/Brave/i',$visit)) $countUserAgents[0]['Brave'] += 1;
            else if(preg_match('/Opera/i',$visit)) $countUserAgents[0]['Opera'] += 1;
            else if(preg_match('/Edge/i',$visit)) $countUserAgents[0]['Edge'] += 1;
            
            else { 
                $countUserAgents[0]['Others'] += 1;
            }
            
        }

        return view('links.insights',['browsers' => $countUserAgents[0]]);
    }

}
