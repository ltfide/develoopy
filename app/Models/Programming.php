<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programming extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'programming_id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'programming_id');
    }

    public function post()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}
