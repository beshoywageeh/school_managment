<?php

namespace App\Models\Inventory;

use App\Enums\InventoryItemCategory;
use App\Enums\InventoryItemType;
use App\Models\class_room;
use App\Models\Grade;
use App\Models\settings;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InventoryItem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'inventory_items';

    protected $fillable = [
        'school_id',
        'type',
        'category',
        'name',
        'unit',
        'current_stock',
        'min_stock',
        'max_stock',
        'cost_price',
        'sell_price',
        'sales_price_set',
        'is_active',
        'opening_qty',
        'opening_date',
        'grade_id',
        'classroom_id',
        'user_id',
        'description',
    ];

    protected $casts = [
        'type' => InventoryItemType::class,
        'category' => InventoryItemCategory::class,
        'is_active' => 'boolean',
        'opening_date' => 'date',
        'opening_qty' => 'decimal:2',
        'sell_price' => 'decimal:2',
        'sales_price_set' => 'decimal:2',
        'cost_price' => 'decimal:2',
        'current_stock' => 'decimal:2',
        'min_stock' => 'decimal:2',
        'max_stock' => 'decimal:2',
    ];

    public function scopeBySchool($query, $schoolId)
    {
        return $query->where('school_id', $schoolId);
    }

    public function scopeActive($query)
    {
        return $query->whereNull('deleted_at');
    }

    public function scopeLowStock($query, $threshold = 10)
    {
        return $query->where('current_stock', '<', $threshold);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function classroom()
    {
        return $this->belongsTo(class_room::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function school()
    {
        return $this->belongsTo(settings::class);
    }

    public function getSalesPriceAttribute()
    {
        return $this->sell_price;
    }

    public function orderItems()
    {
        return $this->morphMany(InventoryOrderItem::class, 'itemable');
    }

    public function transactions()
    {
        return $this->hasMany(InventoryTransaction::class, 'item_id');
    }
}
