<?php

namespace App\Http\Livewire\Component;

use App\Models\Products;
use Livewire\Component;

class SelectProducts extends Component
{
    public $products;
    public $ottPlatform = 'a';
    public function mount()
    {
        $this->products = Products::all();
    }
    public function render()
    {
        return view('livewire.component.select-products');
    }
}
