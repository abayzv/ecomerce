<?php

namespace App\Http\Livewire\Page\Purchase;

use App\Models\Purchase;
use Livewire\Component;

class ShowPurchase extends Component
{
    public $purchase;
    public function mount(Purchase $id)
    {
        $this->purchase = $id;
    }
    public function render()
    {
        return view('livewire.page.purchase.show-purchase')->layout('layouts.admin', ['title' => 'Purchases']);
    }
}
