<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class clothes_order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function stocks()
    {

        return $this->belongsToMany(clothes::class, 'clothes_stocks', 'order_id', 'clothes_id')->withPivot('qty_in', 'qty_out');
    }
}
