<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MainCategoriesTable extends Component
{
    use WithPagination;

    protected $listeners = ['mainCategoryStore' => 'render'];

    public $show = true;

    public function delete($id)
    {
        Storage::delete(DB::table('categories')->where('id', $id)->value('category_logo'));
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
        $categories = Category::paginate(5);
        return view('livewire.main-categories-table', compact('categories'));
    }
}
