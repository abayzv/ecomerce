<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductWidget extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // curl product from https://fakestoreapi.com/products
        $productsJson = json_decode(file_get_contents('https://fakestoreapi.com/products?limit=18'));
        $products = array_chunk($productsJson, 6);
        return view('components.product-widget', compact('products'));
        // dd($products);
        // return view('components.product-widget');
    }
}
