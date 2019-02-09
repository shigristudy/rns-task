<?php

namespace App;

use App\CommentReply;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user(){
    	return $this->hasOne(User::class,'id','commenter_id')->withDefault();
    }

    public function replies(){
    	return $this->hasMany(CommentReply::class,'comment_id','id');
    }
}
