<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\SubCategory;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriesTable extends Component
{
    use WithPagination;

    public $name;
    public $category_id;
    public $categoryId;
    protected $listeners = ['categoryStore' => 'render'];

    public $show = true;

    public function delete($id)
    {
        $category = SubCategory::find($id);
        // $post = Post::where('sub_category_id', $id);
        $category->delete();
        // $post->delete();

        session()->flash('success', 'Delete Category Successfully');
    }

    public function showCategory($id)
    {   
        $this->reset();
        $this->categoryId = $id;

        $category = SubCategory::find($this->categoryId);
        $this->name = $category->name;
        $this->category_id = $category->category_id;

        $this->dispatchBrowserEvent('showModal');
    }

    public function updateCategory()
    {
        $category = SubCategory::find($this->categoryId);
        $category->update([
            'name' => $this->name,
            'category_id' => $this->category_id 
        ]);

        $this->reset();
        session()->flash('success', 'Update Category Successfully');
    }

    

    public function closeBtn()
    {
        $this->show = false;
        $this->reset();
    }
    
    public function render()
    {
        $categories = SubCategory::paginate(5);
        return view('livewire.categories-table', compact('categories'));
    }
}
