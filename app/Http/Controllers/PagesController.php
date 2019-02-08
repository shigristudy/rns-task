<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function profile(){
    	$user = User::findorFail(auth()->user()->id);
    	return view('user')->with('user',$user);
    }

    public function allusers(){
    	$users = User::all();
    	return view('profiles.allusers')->with('users',$users);
    }

    public function editprofile(Request $request)
    {
    	dd($request->all());
    }
}
