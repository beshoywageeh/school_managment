<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class stock extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'opening_stock', 'opening_stock_date'];

    public function orders()
    {
        return $this->belongsToMany(order::class, 'stocks_order', 'stock_id', 'order_id')->withPivot('quantity_in', 'quantity_out');
    }
}
