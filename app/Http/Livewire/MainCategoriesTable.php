<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class MainCategoriesTable extends Component
{
    use WithPagination;

    protected $listeners = ['mainCategoryStore' => 'render'];

    public $show = true;

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        session()->flash('success', 'Delete Category Successfully');
    }

    public function closeBtn()
    {
        $this->show = false;
        $this->reset();
    }

    public function render()
    {
        $categories = Category::paginate(3);
        return view('livewire.main-categories-table', compact('categories'));
    }
}
