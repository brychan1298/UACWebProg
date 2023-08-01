<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function notifications(){
        $friend_req = Friend::where('to_id', auth()->user()->id)->get();
        // dd($friend_req);
        return view('notifications', compact('friend_req'));

    }

    public function accept($id){
        $friend = Friend::find($id);
        $friend->acc = 1;
        $friend->save();

        return redirect('/notifications');
    }
}
