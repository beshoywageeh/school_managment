<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Enums\{Status, Jobs_types};
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class Job extends Model
{
    use HasFactory,LogsActivity, SoftDeletes;
    protected $casts = ['status' => Status::class];
    protected $table='work_jobs';
    protected $fillable = ['status', 'name', 'created_by', 'updated_by', 'main_job_id','is_main'];
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function updator()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
    public function jobs(){
        return $this->belongsTo(Job::class,'main_job_id');
    }
	   public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name', 'status'])->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
    public function getDescriptionForEvent(string $eventName): string
    {
        $changes = $this->getChanges();
        $oldStatus = $this->getOriginal('status');
        $newStatus = $changes['status'] ?? null;
        // تأكد من تحويل القيم إلى نص
        $oldStatus = $oldStatus instanceof Status ? $oldStatus->lang() : $oldStatus;
        $newStatus = $newStatus instanceof Status ? $newStatus->lang() : $newStatus;

        if ($eventName == 'created') {
            return trans('system_lookup.field_create', ['value' => $oldStatus . '-' . $this->oldStatus]);
        } elseif ($eventName == 'updated') {
            return trans('system_lookup.field_change', [
                'value' => $this->id,
                'old_value' => $oldStatus . '-' . $this->name,
                'new_value' => $newStatus . '-' . $this->name
            ]);
        } else {
            return trans('system_lookup.field_delete', ['value' => $this->oldStatus . '-' . $oldStatus]);
        }
    }
}