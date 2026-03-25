<?php

namespace Modules\Inventory\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory_transactions extends Model
{
    use HasFactory;

    protected $fillable = ['item_id', 'transaction_type', 'quantity', 'transaction_date', 'school_id'];

    protected static function newFactory()
    {
        return \Modules\Inventory\Database\factories\InventoryTransactionsFactory::new();
    }
}
