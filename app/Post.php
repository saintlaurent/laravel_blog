<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use Illuminate\Http\Request;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function addComment(Request $comment){
        Comment::create([
            'user_id' => auth()->user()->id,
            'body' => $comment->body,
            'post_id'=> $this->id,
        ]);
    }

    public static function archives(){

    }
}
