<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class My_parents extends Model
{
    use HasFactory, SoftDeletes,LogsActivity;

    protected $table = 'parents';

    protected $fillable = ['Father_Name', 'Father_Phone', 'Father_Job', 'Father_National_Id', 'Mother_Name', 'Mother_Phone', 'Mother_Job', 'Mother_National_Id', 'Religion', 'Address', 'BirthDate', 'user_id', 'Father_Learning', 'Father_Birth_Date', 'Mother_Birth_Date'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function Students()
    {
        return $this->hasMany('App\Models\Student', 'parent_id')->orderBy('join_date','ASC');
    }

    public function scopeSearch($query, $Search)
    {

        return $query->where('Father_Name', 'LIKE', '%'.$Search.'%');
    }
	   public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['Father_Name'])->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
    public function getDescriptionForEvent(string $eventName): string
    {
        $changes = $this->getChanges();
        $oldname = $this->getOriginal('Father_Name');
        $newname = $changes['Father_Name'] ?? null;


        if ($eventName == 'created') {
            return trans('system_lookup.field_create', ['value' => $this->Father_Name]);
        } elseif ($eventName == 'updated') {
            return trans('system_lookup.field_change', [
                'value' => $this->id,
                'old_value' => $oldname,
                'new_value' => $newname
            ]);
        } else {
            return trans('system_lookup.field_delete', ['value' => $this->Father_Name]);
        }
    }
}