<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FriendController extends Controller
{
    public function store(Request $request, User $user){
        if ( !$request->user()->isRelated($user) ){
            $request->user()->from()->attach($user);
        }
        return back();
    } 

    public function update( Request $request, User $user ){
        //dd( $user->id, $request->user()->pendingTo );
        //$request->user()->pendingTo()->where('from_id', $user->id)->update(['accepted' => true]);
        $request->user()->pendingTo()->updateExistingPivot($user, ['accepted' => true]);
        return back();
    }
}
