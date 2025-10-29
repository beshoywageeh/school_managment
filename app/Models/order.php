<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function stocks()
    {

        return $this->belongsToMany(stock::class, 'stocks_order', 'order_id', 'stock_id')->withPivot('quantity_in', 'quantity_out', 'manual', 'manual_date');
    }

    public function laboratory()
    {

        return $this->belongsTo(laboratory::class);
    }

    public function Student()
    {

        return $this->belongsTo(Student::class);
    }

    public function orderable()
    {
        return $this->morphTo();
    }
}
