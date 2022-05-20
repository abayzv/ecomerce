<?php

namespace App\Http\Livewire\Page\Products;

use App\Models\Products;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class EditProduct extends Component
{
    use WithFileUploads;

    public $photo;
    public $product;
    public $products;
    protected $rules = [
        'product.sku' => 'required',
        'product.name' => 'required',
        'product.barcode' => 'required',
        'product.description' => 'required',
        'product.buy_price' => 'required',
        'product.sell_price' => 'required',
        'product.category_id' => 'required',
        'product.slug' => 'required',
    ];
    public function mount(Products $id)
    {
        $this->products = Products::latest()->limit(5)->get();
        $this->product = Products::find($id)->first();
    }
    public function save()
    {   
        if($this->photo){
            $this->product['image_url'] = $this->photo->store('products');
        }
        $this->product['slug'] = Str::slug($this->product['name']);
        $this->product->update();
        return redirect()->route('products');
    }
    public function generate()
    {
        // generate 10 digit number
        $this->product['barcode'] = rand(100000000000, 999999999999);
    }
    public function render()
    {
        return view('livewire.page.products.edit-product')->layout('layouts.admin', ['title' => 'Products']);
    }
}
