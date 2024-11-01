<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class clothes extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'sales_price', 'purchase_price', 'isset', 'opening_qty', 'opening_date', 'grade_id', 'classroom_id'];

    public function orders()
    {
        return $this->belongsToMany(clothes_order::class, 'clothes_stocks', 'clothes_id', 'order_id')->withPivot('qty_in', 'qty_out');
    }

    public function grade()
    {
        return $this->belongsTo(grade::class);
    }

    public function classroom()
    {
        return $this->belongsTo(class_room::class, 'classroom_id');
    }
}
