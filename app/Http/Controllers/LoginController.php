<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(Request $request){
        // dd($request->gender);
        $validated = $request->validate([
            'name' => 'required',
            'instagram' => 'required',
            'dob' => 'required|before:-17 years',
            'hobby' => 'required|array|min:3',
            'gender' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required|min:10|max:14',
            'image' => 'required|image|file',
            'password' => 'required'
        ]);
        $validated['password'] = bcrypt($validated['password']);
        $validated['image'] = $request->file('image')->store('');

        $validated['hobby'] = implode(',', (array) $validated['hobby']);
        $validated['payment'] = mt_rand(100000,125000);
        User::create($validated);

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/payment');
        };

        return redirect('/payment')->with("success","You've succesfully registeresd");
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        };
        return redirect('/login')->with('loginError','Login gagal');
    }

    public function logout(Request $request){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
