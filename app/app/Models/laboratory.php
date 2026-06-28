<?php

namespace App\Models;

use App\Models\Inventory\InventoryOrder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class laboratory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        "location",
        "location_id",
        "sub_location",
        "is_main",
        "school_id",
        "user_id",
    ];

    protected $casts = [
        "is_main" => "boolean",
        "school_id" => "integer",
        "user_id" => "integer",
        "location_id" => "integer",
    ];

    public function sub_locations()
    {
        return $this->hasMany(laboratory::class, "location_id");
    }

    public function orders(): MorphMany
    {
        return $this->hasMany(InventoryOrder::class, "reference");
    }

    public function main_location()
    {
        return $this->belongsTo(laboratory::class, "location_id", "id");
    }
}
