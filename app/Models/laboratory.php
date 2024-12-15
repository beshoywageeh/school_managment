<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class laboratory extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = ['location', 'location_id', 'sub_location', 'is_main'];

    public function sub_locations()
    {
        return $this->hasMany(laboratory::class, 'location_id');
    }

    public function orders()
    {
        return $this->belongsToMany(order::class, 'stocks_order', 'stock_id', 'order_id')->withPivot('quantity_in', 'quantity_out');
    }
}
