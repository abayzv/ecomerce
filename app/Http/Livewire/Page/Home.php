<?php

namespace App\Http\Livewire\Page;

use App\Models\Products;
use Livewire\Component;

class Home extends Component
{
    public $product_count;
    public function mount()
    {
        $this->product_count = Products::all()->count();
    }
    public function render()
    {
        return view('livewire.page.home')->layout('layouts.admin', ['title' => 'Dashboard']);
    }
}
