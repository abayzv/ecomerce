<?php

namespace App\Http\Livewire\Page\Purchase;

use App\Models\Products;
use App\Models\Purchase;
use App\Models\Vendor;
use Livewire\Component;

class AddPurchase extends Component
{
    public $purchase;
    public $products;
    public $vendors;
    public $vendor;
    public $testa = '1';
    public $testb = '2';
    protected $rules = [
        'purchase.vendor_id' => 'required',
        'purchase.transaction_number' => 'required',
        'purchase.due_date' => 'required',
        'purchase.description' => 'required',
        'vendor.id' => 'required'
    ];
    public function mount(Purchase $purchase)
    {
        $this->purchase = new Purchase;
        $this->products = Products::all();
        $this->vendors = Vendor::all();
        $this->vendor = new Vendor;
    }
    public function save()
    {
        $this->purchase->save();
        $this->purchase = new Purchase;
        session()->flash('message', 'Purchase Successfully Added');
    }
    public function selectVendor($id)
    {
        $this->vendor = Vendor::where('id', $id)->first();
    }
    public function test($a, $b)
    {
        $this->testa = $a;
        $this->testb = $b;
    }
    public function render()
    {
        return view('livewire.page.purchase.add-purchase')->layout('layouts.admin', ['title' => 'Purchases']);
    }
}
