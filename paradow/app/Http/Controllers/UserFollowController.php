<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Notification;
use App\user_follow;
class UserFollowController extends Controller
{
    public function store(Request $request, $id)
    {
        $users =user_follow::where('user_id',$id)->first();
        $x=\Auth::user()->follow($id);
        $usera =User::select('id')->where('id',$users->user_id)->first();
        
        Notification::send($usera,new \App\Notifications\followNotify($users));

        return back();
    }

    public function destroy($id)
    {
        \Auth::user()->unfollow($id);

        return back();
    }
}
