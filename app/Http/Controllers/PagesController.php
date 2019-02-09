<?php

namespace App\Http\Controllers;

use App\Comment;
use App\CommentReply;
use App\User;
use File;
use Illuminate\Http\Request;
use Storage;
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
    	//dd($request->all());
        $user = User::findorFail(auth()->user()->id);

    	if($request->hasfile('image'))
        {
           $file = $request->file('image');
           $filename =time().$file->getClientOriginalName();
           $file->move(public_path().'/img/profiles', $filename);
           $user->avatar = $filename;

        }else{
            
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->about = $request->about;
        $user->designation = $request->designation;
        $user->save();
        if($user){
            return response()->json(["success"=>1]);
        }else{
            return response()->json(["success"=>0]);
        }
    }

    public function singleUser($user_id=''){
        $comments = Comment::where('profile_id',$user_id)->get();
        $user = User::findorFail($user_id);
        return view('profiles.single')->with(['user'=>$user,'comments'=>$comments]);
    }

    public function submitComment(Request $request)
    {
        $comment = new Comment;
        $comment->profile_id = $request->profile_id;
        $comment->comment_body = $request->comment;
        $comment->commenter_id = auth()->user()->id;

        $comment->save();

        if($comment){
            return response()->json(["success"=>1,'comment'=>$request->comment,'comment_id'=>$comment->id]);
        }else{
            return response()->json(["success"=>0]);
        }

    }

    public function replysubmitComment(Request $request)
    {
        $comment = new CommentReply;
        $comment->comment_id = $request->comment_id;
        $comment->replybody = $request->replybody;
        $comment->commenter_id = auth()->user()->id;

        $comment->save();

        if($comment){
            return response()->json(["success"=>1,'body'=>$request->replybody]);
        }else{
            return response()->json(["success"=>0]);
        }

    }
}
