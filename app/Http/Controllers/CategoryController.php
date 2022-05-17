<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Programming;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    private CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    
    public function index()
    {
        $categories = Category::all();
        return view("category.categories", compact("categories"));
    }

    public function math() {
        return response()
                -> view('category.math', [
                    'mathData' => $this->categoryService->getDataByCategory('Matematika')
                ]);
    }

    public function programming() {
        return response()
                ->view('category.programming', [
                    'programmingData' => $this->categoryService->getDataByCategory('Programming')
                ]);
    }

    public function english() {
        return response()
                -> view('category.english', [
                    'englishData' => $this->categoryService->getDataByCategory('English')
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
