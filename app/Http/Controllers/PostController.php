<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $data = Post::latest()->paginate(7);
        // return view("index", [
        //     "data" => Post::latest()->paginate(9),
        // ]);
        $data = Post::paginate(9);
        return view('index')->with('posts',$data);
    }

    public function post(Post $post) 
    {
        return view("post", [
            "post" => $post,
            "title" => "OK"
        ]);
    }

    public function paginate_more_products_ajax(Request $request)
    {
        if($request->ajax()){
            $data = Post::latest()->paginate(9);
        
            return view('ajax-list-view', compact("data"))->with('posts',$data)->render();
        }
    }
}
