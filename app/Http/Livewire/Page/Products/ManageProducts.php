<?php

namespace App\Http\Livewire\Page\Products;

use App\Models\Products;
use Livewire\Component;

class ManageProducts extends Component
{
    public $products;
    public function mount(Products $products)
    {
        $this->products = Products::all();
    }
    public function render()
    {
        return view('livewire.page.products.manage-products')->layout('layouts.admin',['title' => 'Products']);
    }
}
