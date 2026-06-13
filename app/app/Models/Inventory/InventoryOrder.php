<?php

namespace App\Models\Inventory;

use App\Enums\InventoryOrderStatus;
use App\Enums\InventoryOrderType;
use App\Models\settings;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InventoryOrder extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'auto_number',
        'type',
        'status',
        'student_id',
        'manual_number',
        'manual_date',
        'total_amount',
        'notes',
        'school_id',
        'user_id',
        'date',
    ];

    protected $casts = [
        'type' => InventoryOrderType::class,
        'status' => InventoryOrderStatus::class,
        'date' => 'date',
        'manual_date' => 'date',
        'total_amount' => 'decimal:2',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function school()
    {
        return $this->belongsTo(settings::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(InventoryOrderItem::class);
    }

    public function transactions()
    {
        return $this->morphMany(InventoryTransaction::class, 'reference');
    }

    public function scopeBySchool($query, $schoolId)
    {
        return $query->where('school_id', $schoolId);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }
}
