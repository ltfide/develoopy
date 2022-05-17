<?php 

namespace App\Services\Impl;

use App\Services\CategoryService;
use Illuminate\Support\Facades\DB;

class CategoryServiceImpl implements CategoryService
{
   public function getDataByCategory(string $category)
   {
      return DB::table('posts')
      ->join('sub_categories', 'posts.sub_category_id', '=', 'sub_categories.id')
      ->join('categories', 'sub_categories.category_id', '=', 'categories.id')
      ->select('posts.*', 'sub_categories.name AS field', 'categories.name', 'categories.category')
      ->where('categories.category', $category)
      ->latest()
      ->get();
   }
}