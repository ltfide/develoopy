<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $data = Post::latest()->paginate(7);
        return view("index", [
            "data" => Post::latest()->paginate(9),
        ]);
    }

    public function post(Post $post) 
    {
        return view("post", [
            "post" => $post,
            "title" => "OK"
        ]);
    }
}
