<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        if(auth()->check()){
            $users = User::where('id',"!=",auth()->user()->id)->get();
        }

        return view('home', compact('users'));
    }

    public function filterMale(){
        $users = User::where('gender','Male')->get();

        if(auth()->check()){
            $users = User::where('id',"!=",auth()->user()->id)->where('gender','Male')->get();
        }

        return view('home', compact('users'));
    }

    public function filterFemale(){
        $users = User::where('gender','Female')->get();

        if(auth()->check()){
            $users = User::where('id',"!=",auth()->user()->id)->where('gender','Female')->get();
        }

        return view('home', compact('users'));
    }

    public function addFriend($user_id){
        $friend = new Friend();
        $friend->from_id = auth()->user()->id;
        $friend->to_id = $user_id;
        $friend->acc = 0;
        $friend->save();

        return view('/');
    }

    public function profile(){
        $user = User::find(auth()->user()->id);
        $friend_from = Friend::where('from_id',auth()->user()->id)->get();
        $friend_to = Friend::where('to_id',auth()->user()->id)->get();

        return view('profile', compact('user','friend_from','friend_to'));
    }

    public function topupPage(){
        return view('topup');
    }

    public function topup(Request $request){
        $user = User::find(auth()->user()->id);

        $user->wallet = $user->wallet + $request->wallet;
        $user->save();

        return redirect('/profile');
    }


    public function payment(){
        $payment = User::find(auth()->user()->id)->payment;
        return view('payment', compact('payment'));
    }

    public function show($id){
        $user = User::find($id);
        return view('detailuser', compact('user'));
    }

    public function show2($id){
        $user = User::find($id);
        return view('detailnotFriend', compact('user'));
    }

    public function pay(Request $request){
        $user = User::find(auth()->user()->id);
        $payment = $request['price'];
        $user->wallet = $user->wallet + ($payment - $user->payment);
        $user->save();

        return redirect('/');
    }
}
