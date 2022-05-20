<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function purchase()
    {
        return $this->hasMany(Purchase::class, 'product_id');
    }
    public function stock()
    {
        return $this->purchase->sum('quantity');
    }
    public function getTotalPrice()
    {
        return DB::table('purchases')
            ->join('products', 'purchases.product_id', '=', 'products.id')
            ->select(DB::raw('SUM(purchases.price*purchases.quantity)/SUM(purchases.quantity) as avg_price'))
            ->where('products.id', $this->id)
            ->groupBy('products.name')
            ->get();
    }
}
