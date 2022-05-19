<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Programming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // $data = Post::paginate(8);
        $data = Category::all();
        return view('home.index', compact('data'));
    }

    public function post(Post $post) 
    {
        return view("home.post", [
            "post" => $post,
            "title" => "OK"
        ]);
    }

    public function paginate_more_content(Request $request)
    {
            $data = Post::latest()->paginate(8);
        
            return view('home.ajax.ajax-list-view', compact("data"))->with('posts',$data)->render();
    }
}
