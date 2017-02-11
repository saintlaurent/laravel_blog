<?php

namespace App\Repositories;
use App\Post;


class PostRepo
{
    public function all(){
        return Post::all();
    }
}