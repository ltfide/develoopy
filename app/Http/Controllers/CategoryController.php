<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("categories", compact("categories"));
    }

    public function show(Category $category)
    {   

        // return Post::where("category_id", $category->id)->latest()->paginate(3);
        return view("category", [
            "categories" => Post::where("category_id", $category->id)->latest()->paginate(5),
            "title" => $category->name,
        ]);
    }
}
