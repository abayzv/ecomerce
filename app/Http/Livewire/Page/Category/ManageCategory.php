<?php

namespace App\Http\Livewire\Page\Category;

use App\Models\Category;
use Livewire\Component;

class ManageCategory extends Component
{
    public $categories;
    public function mount(Category $categories)
    {
        $this->categories = Category::all();
    }
    public function render()
    {
        return view('livewire.page.category.manage-category')->layout('layouts.admin', ['title' => 'Category']);
    }
}
