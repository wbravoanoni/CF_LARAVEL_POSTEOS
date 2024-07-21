<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function dashboard(Request $request){
        dd($request->user()->friendsFrom()->get(),$request->user()->friendsTo()->get());
        
        if( $request->get('for-my') ){
            //$posts = Post::where('user_id', $request->user()->id)->get(); 
            $posts = $request->user()->posts()->latest()->get();
        }else{
            $posts = Post::latest()->get(); 
        }
        return view('dashboard', compact('posts'));
    }
    
}
