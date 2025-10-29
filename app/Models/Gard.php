<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gard extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['order_id', 'stock_id', 'quantity'];

    protected $table = 'gard_stocks';
}
