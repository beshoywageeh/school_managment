<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class clothes extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function orders()
    {
        return $this->belongsToMany(clothes_order::class, 'clothes_stock', 'clothe_id', 'order_id')->withPivot('qty_in', 'qty_out','price_in','price_out');
    }
}
