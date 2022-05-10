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

    public function filterDB($str)
    {
        return DB::table('posts')
        ->join('sub_categories', 'posts.sub_category_id', '=', 'sub_categories.id')
        ->join('categories', 'sub_categories.category_id', '=', 'categories.id')
        ->select('posts.*', 'sub_categories.name AS field', 'categories.name', 'categories.category')
        ->where('categories.category', $str)
        ->latest()
        ->get();
    }

    public function math() {
        return response()
                -> view('category.math', [
                    'mathData' => $this->filterDB('Matematika')
                ]);
    }

    public function programming() {
        return response()
                ->view('category.programming', [
                    'programmingData' => $this->filterDB("Programming")
                ]);
    }

    public function english() {
        return response()
                -> view('category.english', [
                    'englishData' => $this->filterDB('English')
                ]);
    }

    // public function show(Programming $category)
    // {   
    //     return view(".category.category", [
    //         "categories" => Post::where("category_id", $category->id)->latest()->paginate(9),
    //         "title" => $category->name,
    //     ]);
    // }

    // public function math(Category $category)
    // {
    //     $categories = Programming::where('programming_id', $category->id)->get();
    //     $title = $category->name;
    //     return view("category.math", compact("categories", "title"));
    // }
}
