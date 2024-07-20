<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function dashboard(Request $request){

        if( $request->get('for-my') ){
            //$posts = Post::where('user_id', $request->user()->id)->get(); 
            $posts = $request->user()->posts;
        }else{
            $posts = Post::latest()->get(); 
        }
        return view('dashboard', compact('posts'));
    }
    
}
