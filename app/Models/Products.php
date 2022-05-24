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
        return $this->hasMany(PurchaseItem::class, 'product_id');
    }
    public function stock()
    {
        return $this->purchase->sum('quantity');
    }
    public function getTotalPrice()
    {
        $avg = PurchaseItem::select(DB::raw('SUM(price*quantity)/SUM(quantity) as price'))->where('product_id', $this->id)->first();
        if ($avg == null) {
            return 0;
        } else {
            return floor($avg->price);
        }
    }
}
