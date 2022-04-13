<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Programming;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("category.categories", compact("categories"));
    }

    public function show(Programming $category)
    {   
        return view(".category.category", [
            "categories" => Post::where("category_id", $category->id)->latest()->paginate(9),
            "title" => $category->name,
        ]);
    }

    public function math(Category $category)
    {
        $categories = Programming::where('programming_id', $category->id)->get();
        $title = $category->name;
        return view("category.math", compact("categories", "title"));
    }
}
