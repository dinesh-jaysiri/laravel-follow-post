<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\User;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function createfollower(User $user)
    {
        // you can not follow your self 
        if(auth()->user()->id == $user->id){
            return back()->with('failure','you can not follow yourself.');
        }
// you can not follow some one you alrady follow
        $isExist = Follow::where([['user_id','=',auth()->user()->id],['followeduser','=', $user->id]])->count();
        
        if($isExist){
            return back()->with('failure','you have alrady followed this user.');
        }
        $follower = new Follow();

        $follower->user_id = auth()->user()->id;
        $follower->followeduser = $user->id;

        $follower->save();

        return back()->with('success','User successfully followed.');





    }

    public function removefollower()
    {

    }
}