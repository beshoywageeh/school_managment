<?php

namespace Modules\Inventory\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryItems extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'unit', 'current_stock', 'min_stock', 'cost_price', 'sell_price', 'status', 'school_id'];

    public function scoopActive()
    {
        return $this->where('status', 'active');
    }

    protected static function newFactory()
    {
        return \Modules\Inventory\Database\factories\InventoryItemsFactory::new();
    }
}
