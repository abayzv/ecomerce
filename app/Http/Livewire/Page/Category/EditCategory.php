<?php

namespace App\Http\Livewire\Page\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class EditCategory extends Component
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
        $this->category = Category::find($id)->first();
    }
    public function save()
    {   
        if($this->photo){
            $this->category['image_url'] = $this->photo->store('products');
        }
        $this->category['slug'] = Str::slug($this->category['name']);
        $this->category->update();
        return redirect()->route('categories');
    }
    public function render()
    {
        return view('livewire.page.category.edit-category')->layout('layouts.admin', ['title' => 'Category']);
    }
}
