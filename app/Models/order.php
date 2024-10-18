<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class order extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['auto_number', 'type'];

    public function stocks()
    {

        return $this->belongsToMany(stock::class, 'stocks_order', 'order_id', 'stock_id');
    }
}