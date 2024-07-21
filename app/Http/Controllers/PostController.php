<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PostController extends Controller
{
    function store(Request $request){
        $request->validate([
            'body' => 'required'
        ]);

        $request->user()->posts()->create($request->all());
        return back();
    }
}
