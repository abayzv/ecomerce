<?php

namespace App\Http\Livewire\Page\Purchase;

use App\Models\Purchase;
use Livewire\Component;

class PrintPurchase extends Component
{
    public $purchase;
    public function mount(Purchase $id)
    {
        $this->purchase = $id;
    }
    public function render()
    {
        return view('livewire.page.purchase.print-purchase')->layout('layouts.base', ['number' => $this->purchase->transaction_number]);
    }
}
