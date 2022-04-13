<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Programming;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::paginate(8);
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
            $data = Post::latest()->paginate(8);
        
            return view('ajax-list-view', compact("data"))->with('posts',$data)->render();
        }
    }
}
