<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class MainCategories extends Component
{
    public $name;
    public $show = true;
    
    public function store()
    {
        $this->validate([
            'name' => 'required'
        ]);

        Category::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name, '-')
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
        return view('livewire.main-categories');
    }
}
