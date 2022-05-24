<?php

use App\Http\Controllers\DatatableController;
use App\Http\Livewire\Page\About;
use App\Http\Livewire\Page\Category\AddCategory;
use App\Http\Livewire\Page\Category\EditCategory;
use App\Http\Livewire\Page\Category\ManageCategory;
use App\Http\Livewire\Page\Contacts;
use App\Http\Livewire\Page\Home;
use App\Http\Livewire\Page\Home\ShowHome;
use App\Http\Livewire\Page\Products\AddProduct;
use App\Http\Livewire\Page\Products\EditProduct;
use App\Http\Livewire\Page\Products\ManageProducts;
use App\Http\Livewire\Page\Purchase\AddPurchase;
use App\Http\Livewire\Page\Purchase\ManagePurchases;
use App\Http\Livewire\Page\Purchase\PrintPurchase;
use App\Http\Livewire\Page\Purchase\ShowPurchase;
use App\Models\Products;
use App\Models\Purchase;
use App\Models\PurchaseItem;
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

Route::get('/', ShowHome::class)->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('/admin', Home::class)->name('home');
    Route::get('/admin/products', ManageProducts::class)->name('products');
    Route::get('/admin/product/add', AddProduct::class)->name('add-product');
    Route::get('/admin/product/edit/{id}', EditProduct::class)->name('edit-product');
    Route::get('/admin/categories', ManageCategory::class)->name('categories');
    Route::get('/admin/category/add', AddCategory::class)->name('add-caategory');
    Route::get('/admin/category/edit/{id}', EditCategory::class)->name('edit-caategory');
    Route::get('/admin/purchases', ManagePurchases::class)->name('purchases');
    Route::get('/admin/purchase/show/{id}', ShowPurchase::class);
    Route::get('/admin/purchase/print/{id}', PrintPurchase::class);
    Route::get('/admin/purchase/add', AddPurchase::class)->name('add-purchase');
});

Route::get('/test', function () {
    $purchase = Purchase::with('item')->get();
    return json_encode($purchase);
});
