<?php

namespace App\Http\Livewire\Page\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AddCategory extends Component
{ 
    use WithFileUploads;

    public $photo;
    public $category;
    public $categories;
    protected $rules = [
        'category.name' => 'required',
    ];
    public function mount(Category $id)
    {
        $this->categories = Category::latest()->limit(5)->get();
        $this->category = new Category;
    }
    public function save()
    {   
        $this->category['image_url'] = $this->photo->store('products');
        $this->category['slug'] = Str::slug($this->category['name']);
        $this->category->save();
        $this->category = new Category;
        $this->photo = null;
        $this->categories = Category::latest()->limit(5)->get();
        session()->flash('message', 'Category Successfully Added');
    }
    public function render()
    {
        return view('livewire.page.category.add-category')->layout('layouts.admin', ['title' => 'Category']);
    }
}
