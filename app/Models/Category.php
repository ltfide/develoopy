<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["name", "slug", 'category', 'category_logo'];

    public function subCategory()
    {
        return $this->hasMany(SubCategory::class);
    }
}
