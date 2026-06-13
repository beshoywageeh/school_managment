<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InventoryOrderItem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'inventory_order_items';

    protected $fillable = [
        'inventory_order_id',
        'itemable_id',
        'itemable_type',
        'quantity_in',
        'quantity_out',
        'unit_price',
        'total',
    ];

    protected $casts = [
        'quantity_in' => 'decimal:2',
        'quantity_out' => 'decimal:2',
        'unit_price' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    public function order()
    {
        return $this->belongsTo(InventoryOrder::class, 'inventory_order_id');
    }

    public function itemable()
    {
        return $this->morphTo();
    }
}
