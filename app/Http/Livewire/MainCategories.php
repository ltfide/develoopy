<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class MainCategories extends Component
{
    use WithFileUploads;

    public $name;
    public $category;
    public $category_logo;
    public $show = true;
    
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'category' => 'required'
        ]);

        Category::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name, '-'),
            'category' => $this->category,
            'category_logo' => $this->category_logo->store('post-images'),
        ]);

        $this->reset();

        session()->flash('success', 'Create Category Successfully');

        $this->emit('mainCategoryStore');
    }

    public function closeBtn()
    {
        $this->show = false;
        $this->reset();
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.main-categories', compact('categories'));
    }
}
