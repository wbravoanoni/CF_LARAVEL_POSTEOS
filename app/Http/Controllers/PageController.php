<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function dashboard(){
        $posts = Post::latest()->get();
        return view('dashboard', compact('posts'));
    }
    
}
