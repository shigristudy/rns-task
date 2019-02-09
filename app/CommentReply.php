<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    public function user(){
    	return $this->hasOne(User::class,'id','commenter_id')->withDefault();
    }
}
