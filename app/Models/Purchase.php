<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Purchase extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
    public function item()
    {
        return $this->hasMany(PurchaseItem::class);
    }
    public function totalPrice()
    {
        $total = PurchaseItem::select(DB::raw('SUM(price*quantity) as total'))->where('purchase_id', $this->id)->first();
        return $total->total;
    }
    public function discount()
    {
        $discount = PurchaseItem::select(DB::raw('SUM(price*quantity*discount/100) as discount'))->where('purchase_id', $this->id)->first();
        return $discount->discount;
    }
}
