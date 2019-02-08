<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Storage;
use File;
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
    	
    	if($request->hasfile('image'))
         {
            $file = $request->file('image');
            $filename =time().$file->getClientOriginalName();
            //$file->move(public_path().'/img/chat', $filename);
            Storage::disk('local')->put('/public/user/'.$filename, File::get($request->file));

            
         }else{
            
            
         }
    }
}
