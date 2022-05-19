<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;

class CategoriesCreate extends Component
{
    public $name;
    public $category_id;
    public $show = true;

    protected $listeners = ['mainCategoryStore' => 'render'];

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'category_id' => 'required'
        ]);

        SubCategory::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name, '-'),
            'category_id' => $this->category_id
        ]);

        $this->reset();

        session()->flash('success', 'Create Category Successfully');

        $this->emit('categoryStore');
    }

    public function closeBtn()
    {
        $this->show = false;
        $this->reset();
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.categories-create', compact('categories'));
    }
}
