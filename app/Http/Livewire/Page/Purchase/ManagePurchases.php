<?php

namespace App\Http\Livewire\Page\Purchase;

use App\Models\Purchase;
use Livewire\Component;

class ManagePurchases extends Component
{
    public $purchases;
    public function mount(Purchase $purchases)
    {
        $this->purchases = Purchase::all();
    }
    public function render()
    {
        return view('livewire.page.purchase.manage-purchases')->layout('layouts.admin', ['title' => 'Purchases']);
    }
}
