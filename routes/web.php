<?php

use App\Http\Controllers\DatatableController;
use App\Http\Livewire\Page\About;
use App\Http\Livewire\Page\Category\AddCategory;
use App\Http\Livewire\Page\Category\EditCategory;
use App\Http\Livewire\Page\Category\ManageCategory;
use App\Http\Livewire\Page\Contacts;
use App\Http\Livewire\Page\Home;
use App\Http\Livewire\Page\Products\AddProduct;
use App\Http\Livewire\Page\Products\EditProduct;
use App\Http\Livewire\Page\Products\ManageProducts;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum','admin'])->group(function () {
    Route::get('/admin', Home::class)->name('home');
    Route::get('/admin/products', ManageProducts::class)->name('products');
    Route::get('/admin/product/add', AddProduct::class)->name('add-product');
    Route::get('/admin/product/edit/{id}', EditProduct::class)->name('edit-product');
    Route::get('/admin/categories', ManageCategory::class)->name('categories');
    Route::get('/admin/category/add', AddCategory::class)->name('add-caategory');
    Route::get('/admin/category/edit/{id}', EditCategory::class)->name('edit-caategory');
});

Route::get('/test', function(){
    // $product = Products::with(['purchase'])->get(DB);
    // get average price each products join with purchase
    // $avg = DB::table('purchases')
    //     ->join('products', 'purchases.product_id', '=', 'products.id')
    //     ->select(DB::raw('SUM(purchases.price*purchases.quantity)/SUM(purchases.quantity) as avg_price, products.name'))
    //     ->groupBy('products.name')
    //     ->get();
    // $data = [
    //     'stock' => $product[0]->purchase->sum('quantity'),
    //     $avg
    // ];
    // return json_encode($product);
    // get all products with

    $product = Products::with(['purchase' => function($q){
        $q->select('quantity');
    }])->get();
    dd($product);
});
